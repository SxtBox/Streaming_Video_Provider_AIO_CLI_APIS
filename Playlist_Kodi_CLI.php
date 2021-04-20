<?php

/*
 ┌─────────────────────────────────────────────────────────────┐
 |  For More Modules Or Updates Stay Connected to Kodi dot AL  |
 └─────────────────────────────────────────────────────────────┘
 ┌───────────┬─────────────────────────────────────────────────┐
 │ Product   │ Video Provider Streaming HLS Stream Extractor   │
 │ Version   │ v1.0 DEV Multi                                  │
 │ Provider  │ https://www.streamingvideoprovider.com          │
 │ Support   │ M3U8/VLC/KODI/SMART TV/XTream Codes/Web Players │
 │ Licence   │ MIT                                             │
 │ Author    │ Olsion Bakiaj                                   │
 │ Email     │ TRC4@USA.COM                                    │
 │ Author    │ Endrit Pano                                     │
 │ Email     │ INFO@ALBDROID.AL                                │
 │ Website   │ https://kodi.al                                 │
 │ Facebook  │ /albdroid.official/                             │
 │ Github    │ github.com/SxtBox/                              │
 │ Created   │ 20 April 2021                                   │
 │ Modified  │ 00:0000:0000                                    │
 └─────────────────────────────────────────────────────────────┘
*/

/*
 Generator @ Kodi dot AL Dev Tools
 Code For PHP 5/7/8
 Tested on PHP/8.0.3
 To play the structure Required LiveStreamsPro Addon
 Addon Host: https://addons.kodi.al/
 Zip Name: https://addons.kodi.al/LiveStreamsPro.zip
 HOSTED APIS https://paidcodes.albdroid.al/Streaming_Video_Provider_APIS/
 RULES AL: Ky API Eshte Vetem Per Demostrim, Nese Ju e Keqperdorni Do Te Humbisni Komunikimin Me Serverat Tane
 RULES EN: This API is For Demonstration Only, If You Misuse It You Will Lose Communication With Our Servers
*/

// Playlist Kodi
error_reporting(0);
set_time_limit(0);
date_default_timezone_set("Europe/Tirane");

$API_HOST = "https://paidcodes.albdroid.al/Streaming_Video_Provider_APIS/";
$PHP_FILE =  "Playlist_Kodi.php";
$GET_PARAMAMETER =  "?id=";

$STREAM_ID =  "35c88c8i3d8d044"; // CHANGE JUST Playlist ID

$API_CALL = $API_HOST. $PHP_FILE . $GET_PARAMAMETER . $STREAM_ID;
$GET_URL = file_get_contents($API_CALL.$_SERVER['QUERY_STRING']);
header('Content-Type: application/xml');
echo $GET_URL;
?>