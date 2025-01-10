<?php
// Define the URL and parameters
$url = "http://172.25.203.91/goip_get_sms.html?username=root&password=root";

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo "cURL Error: " . curl_error($ch);
} else {
    // Output the response
    echo $response;
}

// Close cURL session
curl_close($ch);
?>
