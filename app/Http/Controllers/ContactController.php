<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use TelegramBot\Api\BotApi;

class ContactController extends BaseController
{
    public function send(Request $request)
    {
        $bot = new BotApi('552492679:AAGZPT2907W1REWBDwkWoahRch3CEp-96WU');
        $bot->sendMessage('@footinhand', 'Новый контакт email: ' . $request->post('email'));

        return redirect('/');
    }
}
