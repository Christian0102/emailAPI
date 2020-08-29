<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class AjaxFeedback extends Controller
{

    public function sendEmail(Request $request)
    {
        if ($request->ajax()) {
            $userId = auth()->user()->id;

            $request->validate([
                'message' => 'required|max:255',
            ]);
            $checkMessage = Message::where('user_id', '=', $userId)->first();
            if ($checkMessage === null) {
                $message = new Message();
                $message->user_id = $userId;
                $message->message  = $request->input('message');
                if ($message->save()) {

                    return  response()->json(
                        'You Message Has Sent to Email',
                        201,
                        ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                        JSON_UNESCAPED_UNICODE
                    );
                }
            } else {
                return response()->json(
                    'You have already sent a message',
                    403,
                    ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
                    JSON_UNESCAPED_UNICODE
                );
            }
        }
    }
}
