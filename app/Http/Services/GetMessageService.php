<?php

namespace App\Http\Services;

use LINE\LINEBot;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;

class GetMessageService
{
    /**
     * @var LINEBot
     */
    private $bot;
    /**
     * @var HTTPClient
     */
    private $client;

    public function replySend($formData)
    {
        // dd($formData);
        $replyToken = $formData['events']['0']['replyToken'];
        $this->client = new CurlHTTPClient(env('LINE_BOT_ACCESS_TOKEN'));
        dd($replyToken);
        $this->bot = new LINEBot($this->client, ['channelSecret' => env('LINE_BOT_SECRET')]);

        $response = $this->bot->replyMessage($replyToken, 'hello!');

        if ($response->isSucceeded()) {
            return;
        }

        // return "Verify Failed.";
    }
}