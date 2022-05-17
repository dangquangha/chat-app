<?php

namespace App\Http\Controllers;

use App\Events\MessagePosted;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function getMessages()
    {
        return Message::with('user')->get();
    }

    public function sendMessages()
    {
        $user = Auth::user();

        $message = new Message();
        $message->message = request()->get('message', '');
        $message->user_id = $user->id;
        $message->save();

        broadcast(new MessagePosted($message, $user))->toOthers();

        return ['message' => $message->load('user')];
    }
}
