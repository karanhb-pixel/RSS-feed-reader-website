# RSS Feed Reader Website

This project is a simple RSS feed reader website. It allows users to enter an RSS feed URL and view the content of the feed.

## Features

* **RSS Feed Input:** Users can enter an RSS feed URL in a text input.
* **Fetch and Display:** The application fetches the RSS feed data and displays the title, description, and link of each item.
* **Error Handling:** The application handles errors, such as invalid URLs or failed fetch requests.
* **Basic Styling:** The application has a clean and simple design.

## Technologies Used

* **Frontend:**
    * HTML
    * CSS
    * JavaScript (for handling user input and initiating the request)
* **Backend:**
    * PHP (for fetching and processing the RSS feed data)

## Setup

1.  **Clone the repository:**

    ```bash
    git clone [https://github.com/karanhb-pixel/RSS-feed-reader-website.git](https://github.com/karanhb-pixel/RSS-feed-reader-website.git)
    ```
2.  **Navigate to the project directory:**

    ```bash
    cd RSS-feed-reader-website
    ```
3.  **Set up the PHP backend:**

    * Ensure you have a web server (e.g., Apache, Nginx) with PHP installed.
    * Copy the PHP files (e.g., `feed.php`) to a directory accessible by your web server.  The web server needs to be configured to execute PHP files.
4.  **Access the application in your browser:**

    * Open your browser and go to the URL where the application is hosted (e.g., `http://localhost/your-php-directory/`).

## How to Use

1.  **Enter RSS Feed URL:** Enter the URL of the RSS feed you want to read in the input box.
2.  **Click "Get Feed":** Click the "Get Feed" button to send the URL to the server.
3.  **View Feed Items:** The server-side PHP script will fetch the RSS feed, process it, and display the title, description, and link of each item in your browser.


