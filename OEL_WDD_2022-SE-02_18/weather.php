<?php
// Enable CORS for frontend access
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Get city from query parameter
$city = isset($_GET['city']) ? trim($_GET['city']) : '';

if (empty($city)) {
    http_response_code(400);
    echo json_encode(['cod' => 400, 'message' => 'City parameter is required']);
    exit;
}

// API configuration
$apiKey = "1af8e631053c314238ce0f8b0914e8c1";
$apiUrl = "https://api.openweathermap.org/data/2.5/weather?units=metric&q=" . urlencode($city) . "&appid=" . $apiKey;

// Initialize cURL
$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => $apiUrl,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_USERAGENT => 'WeatherApp/1.0'
]);

// Execute request
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Check for cURL errors
if (curl_error($ch)) {
    http_response_code(500);
    echo json_encode([
        'cod' => 500, 
        'message' => 'Weather service unavailable: ' . curl_error($ch)
    ]);
    curl_close($ch);
    exit;
}

curl_close($ch);

// If we got a successful response from OpenWeather
if ($httpCode === 200) {
    http_response_code(200);
    echo $response;
} else {
    // Forward the error from OpenWeather
    http_response_code($httpCode);
    echo $response;
}
?>