<?php

namespace App\Http\Services;

// use LINE\LINEBot;
// use LINE\LINEBot\HTTPClient\CurlHTTPClient;

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
        $data = json_decode(json_encode(buttonObj()));

        $replyToken = $formData['events']['0']['replyToken'];
        $this->client = new CurlHTTPClient(env('LINE_BOT_ACCESS_TOKEN'));
        $this->bot = new LINEBot($this->client, ['channelSecret' => env('LINE_BOT_SECRET')]);
        dd($this->bot);
        $response = $this->bot->replyText($replyToken, "Hello!");

        if ($response->isSucceeded()) {
            logger($replyToken);
            return $response;
        }

        // return "Verify Failed.";
    }

}