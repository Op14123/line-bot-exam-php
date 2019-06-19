<?php



require "vendor/autoload.php";

$access_token = 'X6gT2Pf2ZEPB/zw1bzIid6MvjSM6pj7gvPswFMhlCyaIS8XcMFARa/Iff3RiP79rfTjxWGr1/zUSr4r9lOfejKw2XgGIQI+O+XkWDfcc+3xNUqKCOx2KjH9yMIw/zv2guvMI15U8jeuxB3ykmd0xCgdB04t89/1O/w1cDnyilFU=';'

$channelSecret = '3e63232534fbe2e8d8910f79e265cd8d';

$pushID = 'Udf5406dc1ea91a9dfa6372f85f60aae4';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







