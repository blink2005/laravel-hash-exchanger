<?php

namespace App\Http\Controllers\send_message;

use App\Http\Controllers\Controller;
use App\Models\Text;
use Illuminate\Http\Request;

class PostSendMessageController extends Controller
{
    public function sendMessage(Request $request) # Покажет страницу с Hash
    {
        $this->validateInput($request);

        if($this->checkInDatabase($request))
        {
            $this->sendInDatabase($request);
        }

        return view('send-message.post-send-message', ['hash' => md5($request->form_text)]);
    }

    public function validateInput($request) # Валидация данных из формы
    {
        $request->validate(['form_text' => 'required']);
    }

    public function checkInDatabase($request) # Если текста в MySQL нет, создаст его
    {
        $check = Text::select('original_text')->where('original_text', $request->form_text)->get();
        
        $result = count($check) === 0 ? true : false;
        return $result;
    }

    public function sendInDatabase($request) # Отправка текста в MySQL
    {
        Text::Create([
            'original_text' => $request->form_text,
            'hash_text' => md5($request->form_text),
        ]);
    }
}
