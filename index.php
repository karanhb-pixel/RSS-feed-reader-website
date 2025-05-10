<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSS-feed-reader-website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="heading">
    <h1>This simple RSS feed Reader Site.</h1>
    </div>
    <form action="" method="post">
        <h2><label for="rss_link">Enter RSS Feed URL:</label></h2>
        <input type="text" id="rss_link" name="rss_link" required>
        <button type="submit" value="submit">Submit</button>
    </form>
    <div class="subheading">
        <h2>Example RSS link: https://timesofindia.indiatimes.com/rssfeeds/66949542.cms</h2>
        </div>

<?php
if(isset($_POST['rss_link'])){
    $feedurl = $_POST['rss_link'] ?? null;
    if($feedurl == null){
        $feedurl="https://timesofindia.indiatimes.com/rssfeeds/66949542.cms";
    }

    $feed = json_decode(json_encode(simplexml_load_file($feedurl)), true);

    if(isset($feed['channel']['item'])){
        echo"<div class = 'container'>";
        foreach($feed['channel']['item'] as $item){
            echo "<div class='item'>";
            echo "<h2><a href='".$item['link']."'>".$item['title']."</a></h2>";
            
            echo "<div class='disc'>".$item['description']."</div>";
            $pubDate = date("D, d M Y", strtotime($item['pubDate']));
            echo "<p> Published on: ".$pubDate."</p>";
            echo"</div>";
        }
    }else{
        echo "<h2> No items found in the feed </h2>";
    }
}
?>
</body>
</html>