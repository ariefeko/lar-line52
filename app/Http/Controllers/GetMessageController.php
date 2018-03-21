<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetMessageRequest;
use App\Http\Services\GetMessageService;

class GetMessageController extends Controller
{
    private $messageService;

    public function __construct(GetMessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    public function getMessage(GetMessageRequest $request)
    {
        $this->messageService->replySend($request->json()->all());
    }

    public function botEngine()
    {
        $channelAccessToken = env('LINE_BOT_ACCESS_TOKEN');
        $channelSecret = env('LINE_BOT_SECRET');
        $client = new \LINEBotTiny($channelAccessToken, $channelSecret);

        $userId = $client->parseEvents()[0]['source']['userId'];
        $replyToken = $client->parseEvents()[0]['replyToken'];
        $timestamp = $client->parseEvents()[0]['timestamp'];
        $message = $client->parseEvents()[0]['message'];
        $messageid = $client->parseEvents()[0]['message']['id'];
        $profil = $client->profil($userId);
        $pesan_datang = $message['text'];

        // $balas = array(
        //             'replyToken' => $replyToken,
        //             'messages' => [
        //                 carouselObj()
        //                 // array(
        //                 //     'type' => 'text',
        //                 //     'text' => 'Fungsi PHP base64_encode medantechno.com :'. base64_encode("medantechno.com")
        //                 // )
        //             ]
        //         );
        // dd($balas);

        //pesan bergambar
        if($message['type']=='text') {
            if($pesan_datang=='1') {
                $balas = [
                    'replyToken' => $replyToken,
                    'messages' => [
                        buttonObj()
                    ]
                ];
            } else if($pesan_datang=='2') {
                // $get_sub = array();
                // $aa = array(
                //     'type' => 'image',
                //     'originalContentUrl' => 'https://medantechno.com/line/images/bolt/1000.jpg',
                //     'previewImageUrl' => 'https://medantechno.com/line/images/bolt/240.jpg'
                // );
                // array_push($get_sub,$aa);
                // $get_sub[] = array(
                //     'type' => 'text',
                //     'text' => 'Halo '.$profil->displayName.', Anda memilih menu 2, harusnya gambar muncul.'
                // );

                // $balas = array(
                //     'replyToken'    => $replyToken,
                //     'messages'      => $get_sub
                // );
                $balas = [
                    'replyToken' => $replyToken,
                    'messages' => [
                        confirmObj()
                    ]
                ];
            } else if($pesan_datang=='3') {
                $balas = [
                    'replyToken' => $replyToken,
                    'messages' => [
                        carouselObj()
                        // array(
                        //     'type' => 'text',
                        //     'text' => 'Fungsi PHP base64_encode medantechno.com :'. base64_encode("medantechno.com")
                        // )
                    ]
                ];
            } else if($pesan_datang=='4') {
                $balas = array(
                    'replyToken' => $replyToken,
                    'messages' => [
                        imageObj()
                        // array(
                        //     'type' => 'text',
                        //     'text' => 'Jam Server Saya : '. date('Y-m-d H:i:s')
                        // )
                    ]
                );
            } else if($pesan_datang=='5') {
                $balas = array(
                    'replyToken' => $replyToken,
                    'messages' => array(
                        array(
                            'type' => 'location',
                            'title' => 'Lokasi Saya.. Klik Detail',
                            'address' => 'Medan',
                            'latitude' => '3.521892',
                            'longitude' => '98.623596'
                        )
                    )
                );
            } else if($pesan_datang=='6') {
                $balas = array(
                    'replyToken' => $replyToken,
                    'messages' => array(
                        array(
                            'type' => 'text',
                            'text' => 'Testing PUSH pesan ke anda'
                        )
                    )
                );

                $push = array(
                    'to' => $userId,
                    'messages' => array(
                        array(
                            'type' => 'text',
                            'text' => 'Pesan ini dari storabot.com'
                        )
                    )
                );

                $client->pushMessage($push);
            } else {
                $balas = array(
                    'replyToken' => $replyToken,
                    'messages' => array(
                        array(
                            'type' => 'text',
                            'text' => 'Halo, untuk testing menu silahkan pilih 1,2,3,4,5,6...'
                        )
                    )
                );
            }
        }else if($message['type']=='sticker') {
            $balas = array(
                'replyToken' => $replyToken,
                'messages' => array(
                    array(
                        'type' => 'text',
                        'text' => 'Terimakasih stikernya... '
                    )
                )
            );
        }

        $result =  json_encode($balas);
        //$result = ob_get_clean();
        file_put_contents('./balasan.json',$result);
        $client->replyMessage($balas);
    }

}