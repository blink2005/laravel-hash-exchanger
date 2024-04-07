<?php

namespace App\Http\Controllers\send_message;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetSendMessageController extends Controller
{
    public function sendMessagePage() # Покажет страницу отправки сообщения
    {
        return view('send-message.get-send-message');
    }
}
