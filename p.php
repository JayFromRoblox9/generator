<?php

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the Roblox cookie value from the form input
    $cookie = $_POST["cookie"];

    // Initialize cURL session
    $ch = curl_init();

    // Set the URL of the API endpoint
    curl_setopt($ch, CURLOPT_URL, "https://www.roblox.com/mobileapi/userinfo");

    // Set the headers for the request
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Cookie: .ROBLOSECURITY=" . $cookie, // Include the cookie in the request headers
        "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36" // Set a User-Agent header to mimic a browser
    ));

    // Set the option to return the response as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute the cURL request
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        echo "cURL Error: " . curl_error($ch);
        // Handle cURL error here
    } else {
        // Get the HTTP status code
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        // Decode the response as JSON
        $profile = json_decode($response, true);

        // Check if the HTTP status code is 200 (OK) and the JSON decoding was successful
        if ($httpCode === 200 && json_last_error() === JSON_ERROR_NONE) {
            // The cookie is valid, and the user's profile information is stored in the $profile variable
            // You can access the profile data and perform further actions here

            echo "Cookie is valid. User ID:<br> " . $profile['UserName'];
            echo "<br>Robux Balance:<br>" . $profile['RobuxBalance'];
        } else {
            // The response status code is not 200 or the response is not valid JSON
            // This indicates that the cookie is invalid or expired
            // Handle the invalid cookie case here

            echo "Invalid cookie.";
        }
    }

    // Close the cURL session
    curl_close($ch);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Roblox Cookie Checker</title>
</head>
<body>
    <form method="POST" action="">
        <label for="cookie">Enter your Roblox cookie value:</label>
        <input type="text" name="cookie" id="cookie">
        <input type="submit" value="Check Cookie">
    </form>
</body>
</html>
