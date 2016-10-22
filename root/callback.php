<?php
/**
 * Created by PhpStorm.
 * User: kenzo
 * Date: 2016/10/23
 * Time: 0:34
 */

define("LINE_MESSAGING_API_CHANNEL_SECRET", '7ce26fb54a53c4d258e855b7f49d0c37');
define("LINE_MESSAGING_API_CHANNEL_TOKEN", 'WGI2sHZrfhY94b4HurfkPmIINGpRw47EqBz3iJHOXtnloBAnZPlo6X293XM1RIUYuGMZJFWzCTXQkUvtDs7WKh7CbmbICOcOmp4m+ets5UMbOHPDerVwO+dlTagr7EaWQRTxuzM4z/dj1+z6jSwfWgdB04t89/1O/w1cDnyilFU=ISSUE');

require __DIR__."/../vendor/autoload.php";

$bot = new \LINE\LINEBot(
    new \LINE\LINEBot\HTTPClient\CurlHTTPClient(LINE_MESSAGING_API_CHANNEL_TOKEN),
    ['channelSecret' => LINE_MESSAGING_API_CHANNEL_SECRET]
);

$signature = $_SERVER["HTTP_".\LINE\LINEBot\Constant\HTTPHeader::LINE_SIGNATURE];
$body = file_get_contents("php://input");

$events = $bot->parseEventRequest($body, $signature);

foreach ($events as $event) {
    if ($event instanceof \LINE\LINEBot\Event\MessageEvent\TextMessage) {
        $reply_token = $event->getReplyToken();
        $text = $event->getText();
        $bot->replyText($reply_token, $text);
    }
}

echo "OK";