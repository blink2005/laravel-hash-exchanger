<?php

namespace App\Http\Controllers\select_message;

use App\Http\Controllers\Controller;
use App\Models\Text;
use Illuminate\Http\Request;

class PostSelectMessageController extends Controller
{
    public function selectMessage(Request $request) # Покажет страницу с сообщением, если Hash существует
    {
        $this->validateInput($request);
        $messageInDatabase = $this->checkInDatabase($request->form_text);

        if ($messageInDatabase)
        {
            return view('select-message.post-select-message', ['message' => $messageInDatabase]);
        }
        else
        {
            return view('error.message-not-found');
        }
    }

    public function validateInput($request) # Валидация данных из формы
    {
        $request->validate(['form_text' => 'required']);
    }

    public function checkInDatabase($hash) # Если Hash существует, вывести пользователю сообщение
    {
        $check = Text::select('original_text')->where('hash_text', $hash)->get();
        if (count($check) > 0)
        {
            return $check[0]->original_text;
        }
        else
        {
            return false;
        }
    }
}
