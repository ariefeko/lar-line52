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
        $data = json_decode(json_encode(buttonObj()));//dd($data);

        // dd($formData);
        $replyToken = $formData['events']['0']['replyToken'];
        $this->client = new CurlHTTPClient(env('LINE_BOT_ACCESS_TOKEN'));
        $this->bot = new LINEBot($this->client, ['channelSecret' => env('LINE_BOT_SECRET')]);
        $response = $this->bot->replyMessage($replyToken, buttonObj());
        // dd($response);

        if ($response->isSucceeded()) {
            return $response;
        }

        // return "Verify Failed.";
    }
}