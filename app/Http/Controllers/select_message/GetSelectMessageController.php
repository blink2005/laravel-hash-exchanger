<?php

namespace App\Http\Controllers\select_message;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetSelectMessageController extends Controller
{
    public function selectMessagePage() # Покажет страницу получения сообщения
    {
        return view('select-message.get-select-message');
    }
}
