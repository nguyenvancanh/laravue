<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\Auth;
use App\Events\MessagePosted;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('chat');
    }

    public function getMessages()
    {
        return App\Message::with('user')->get();
    }

    public function postMessages(Request $request)
    {
        $user = Auth::user();
        $message = $user->messages()->create([
            'message' => $request->get('message'),
        ]);

        broadcast(new MessagePosted($message, $user));

        return ['status' => 'OK'];
    }
}
