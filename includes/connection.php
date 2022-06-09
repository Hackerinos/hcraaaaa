<?php

error_reporting(0); // disable PHP errors, you can comment out or turn on logs if you need to fix issue

/* Attempt MySQL server connection. Assuming you are running MySQL

server with default setting (user 'root' with no password) */

$link = mysqli_connect("de1.sneakyhub.com", "u1003_0qwfKlrpQC", "kJ@A6@D^NzfGUjrXEw.wEcPO", "s1003_hcrauth");

// Check connection status

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

$logwebhook = "https://discord.com/api/webhooks/972804296242520134/w1XlFAYfuTgztVkKIpge7bxUlxOAGAWZLzoN7bg-ez7E__EQx8uffzuntbKc5Tc_pAIo"; // discord webhook which receives login logs and keys created

$adminwebhook = "https://discord.com/api/webhooks/972804375670050856/ydI4JavjkjFjaxNnZGQi4jrnAcVUGoed9h14aeqwIGgl3ChHrre9J-ehmi-THX5WELS3"; // discord webhook which receives admin actions

$webhookun = "HcRAuth Logs"; // webhook username

$adminwebhookun = "HcRAuth Admin Logs"; // admin webhook's username


$adminapikey = ""; // api key for api/admin (an api only my staff can use)

$shoppyAPIkey = ""; // shoppy.gg API key for my staff to look up orders

$proxycheckapikey = ""; // proxycheck.io API key to check if IP is considered a VPN

?>
