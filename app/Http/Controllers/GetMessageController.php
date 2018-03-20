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
        // dd($request->json());
        // $data = json_decode(json_encode(buttonObj()));//dd(button());
        // $this->messageService->replySend($data);
        $this->messageService->replySend($request->json()->all());
    }
}