<?php

namespace App\Http\Controllers;

use App\Events\MessageSentEvent;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Show data
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('chat');
    }

    /**
     * Show messages by user.
     *
     * @param Message $message
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function fetch(Message $message)
    {
        return $message->with('user')->get();
    }

    /**
     * Sent message
     */
    public function sent()
    {
        $user = auth()->user();

        $message = $user->message()->create([
            'message' => request('message')
        ]);

        event(new MessageSentEvent($user, $message));
    }
}
