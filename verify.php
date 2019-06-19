<?php
$access_token = 'X6gT2Pf2ZEPB/zw1bzIid6MvjSM6pj7gvPswFMhlCyaIS8XcMFARa/Iff3RiP79rfTjxWGr1/zUSr4r9lOfejKw2XgGIQI+O+XkWDfcc+3xNUqKCOx2KjH9yMIw/zv2guvMI15U8jeuxB3ykmd0xCgdB04t89/1O/w1cDnyilFU='
$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
