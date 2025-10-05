# Open-Ended Lab: Modern Weather Forecast Application 🌤️

## Project Overview

This is a dynamic and responsive **Weather Forecast Application** developed as the Open-Ended Lab (OEL) project for the Web Design and Development course.

The application allows users to quickly retrieve current weather conditions, temperature, humidity, wind speed, and other crucial metrics for any city worldwide by leveraging the **OpenWeatherMap API**. It is built using a modern **client-server architecture** to ensure secure API key management and efficient data fetching.

### Key Features ✨

* **Responsive and Modern UI:** Built with **Bootstrap 5** for a clean, mobile-friendly, and professional user interface.
* **Asynchronous Data Fetching:** Uses **JavaScript's Fetch API** to communicate with a PHP back-end, providing a smooth, non-blocking user experience.
* **Secure API Handling:** Implements a **PHP proxy (`weather.php`)** to securely manage the OpenWeatherMap API key on the server-side, preventing exposure on the client-side, which is a critical security best practice.
* **Comprehensive Weather Data:** Displays core metrics including:
    * Current Temperature (in Celsius)
    * Weather Condition and Icon
    * Humidity
    * Wind Speed
    * "Feels Like" Temperature
    * Visibility
* **Robust Error Handling:** Provides immediate feedback to the user with specific error messages for scenarios like "City not found" or network issues.
* **Loading State Indicator:** Features a loading spinner to enhance the user experience during data retrieval.

***

## Technical Stack

This project demonstrates proficiency across the full web development stack:

| Component | Technology | Role |
| :--- | :--- | :--- |
| **Frontend Structure** | HTML5 | Defines the semantic structure of the application. |
| **Frontend Styling** | CSS3 (External `oel.css`) | Custom styling to refine the aesthetic design. |
| **Responsive Design** | **Bootstrap 5.3.0** | Framework used for layout, components (cards, buttons), and responsiveness. Includes **Bootstrap Icons** for clear visual feedback. |
| **Client-Side Logic** | JavaScript (External `oel.js`) | Handles user input, DOM manipulation, asynchronous data requests, and UI state management (loading, error, display). |
| **Server-Side Proxy** | **PHP (`weather.php`)** | Acts as a secure intermediary to fetch data from the OpenWeatherMap API using **cURL**, obscuring the API key from the client. |
| **External API** | OpenWeatherMap API | Source of real-time weather data. |

***

## Setup and Installation (Using XAMPP) 🛠️

To run this project locally, you must use a local server environment capable of running PHP, such as **XAMPP** (or WAMP/MAMP).

### 1. Prerequisites

* **XAMPP:** Must be installed and running on your machine.
* **OpenWeatherMap API Key:** Required for fetching data.

### 2. Project File Placement

1.  **Locate `htdocs`:** Open your XAMPP installation directory (usually `C:\xampp`). Navigate to the primary web server root: `C:\xampp\htdocs`.
2.  **Create Project Folder:** Inside `htdocs`, create a new folder for your project (e.g., `weather-oel`).
3.  **Transfer Files:** Copy all your project files into this new folder:
    * `index.html`
    * `oel.js`
    * `oel.css` (The external CSS file)
    * `weather.php`
    * `img.png` (The default weather icon image)

### 3. API Key Configuration

For the application to function, you must configure both the client-side and server-side files:

1.  **Server-Side (Security Critical):**
    * Open the **`weather.php`** file.
    * Replace the placeholder key on the line starting with `$apiKey = ...` with your actual OpenWeatherMap API key. This keeps the key secure on the server.
    ```php
    // In weather.php
    $apiKey = "YOUR_API_KEY_HERE"; // <-- Update this line
    ```
2.  **Client-Side (API Endpoint):**
    * The JavaScript is already correctly configured to use the local PHP file as a proxy:
    ```javascript
    // In oel.js
    const apiUrl = "./weather.php?city="; // <-- This correctly points to the local PHP proxy
    ```

### 4. Run the Application

1.  **Start XAMPP:** Open the **XAMPP Control Panel**.
2.  **Start Modules:** Click **Start** next to **Apache** (for the web server) and **MySQL** (though not strictly required for this specific project, it's good practice).
3.  **Access in Browser:** Open your web browser and navigate to the local server URL, referencing your project folder name:
    ```
    http://localhost/weather-oel/index.html
    ```
4.  **Usage:** Enter a city name (e.g., `London` or `Tokyo`) and click **Search** or press **Enter**.

***

## Project Preview (Screenshots) 📸

Since a live link is not provided, these screenshots illustrate the application's appearance, responsiveness, and key functionality states.

### 1. Initial / Default View

<img src='./images/default.png'>

* **Description:** The application loaded successfully, ready for user input. Displays the modern, card-based layout using Bootstrap.

### 2. Weather Results View


<img src='./images/search.png'>

* **Description:** Successful data retrieval showing comprehensive weather metrics, country code, weather condition, and the corresponding OpenWeatherMap icon.

### 3. Error State View

<img src='./images/error.png'>


* **Description:** Demonstration of the robust client-side error handling, clearly informing the user when a search fails (e.g., due to an invalid city name or API issue).

### 4. Mobile Responsiveness View

<img src='./images/mobile.png'>


* **Description:** Confirms the application's responsiveness, with the detail cards correctly stacking vertically on smaller screens as defined by Bootstrap's grid system.