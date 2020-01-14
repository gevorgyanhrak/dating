<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Events\WebSocketDemoEvent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Events\PrivateWebSocketEvent;

class ChatsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('chat');
    }

    public function fetchMessages($id)
    {
        $user = User::where('id', $id)->firstOrFail();
        $user_id = $user->id;
        $auth_id = Auth::id();

        $data =  Message::where(function($q) use($user_id){
            $q->where('messages.from_user_id', $user_id)
            ->orWhere('messages.to_user_id', $user_id);
        })
            ->where(function($q) use($auth_id){
                $q->where('messages.from_user_id', $auth_id)
                    ->orWhere('messages.to_user_id', $auth_id);
            })
            ->leftJoin('users', 'users.id', '=', 'messages.from_user_id')
            ->select('messages.*', 'users.name')
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json([
            'data' => $data
        ]);
    }

    public function sendMessage(Request $request, $hash)
    {
        $user = User::where('hash', $hash)->firstOrFail();
        $user_id = $user->id;
        $auth_id = Auth::id();
        $hash = $user_id > $auth_id ? $auth_id.$user_id : $user_id.$auth_id;

        $data = new Message;
        $data->message = $request->message;
        $data->from_user_id = $auth_id;
        $data->to_user_id = $user_id;
        $data->save();
        broadcast(new PrivateWebSocketEvent($request->message, $hash))->toOthers();
        return ['status' => 'success'];
    }

}
