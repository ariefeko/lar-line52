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
        $data = buttonTemplate();//dd(json_decode(json_encode($data)));
        $this->messageService->replySend(json_decode(json_encode($data)));
        // $this->messageService->replySend($request->json()->all());
    }
}