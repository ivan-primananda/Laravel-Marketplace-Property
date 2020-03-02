<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Pengguna;
use App\Agent;
use Validator;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Pusher\Pusher;

class MessageController extends Controller
{
    public function index()
    {

    	$users = DB::table('pengguna')
            ->leftJoin('messages', 'messages.from', '=', 'pengguna.email')
            ->select('pengguna.id','pengguna.full_name','pengguna.email','pengguna.picture')
            ->where('to', Session::get('email'))
            ->groupBy('pengguna.id', 'pengguna.full_name', 'pengguna.email', 'pengguna.picture')
            ->orderBy('messages.created_at', 'desc')
            ->get();

        $jumlah = Message::where([
                ['is_read', 0],
                ['to', Session::get('email')]
            ])->count('is_read');

	 	return view('chat', compact('users', 'jumlah'));
    }

    public function pesan()
    {

        $users = DB::table('agent')
            ->leftJoin('messages', 'messages.from', '=', 'agent.email')
            ->select('agent.id','agent.full_name','agent.email','agent.picture')
            ->where('to', Session::get('email'))
            ->groupBy('agent.id', 'agent.full_name', 'agent.email', 'agent.picture')
            ->orderBy('messages.created_at', 'desc')
            ->get();

        $jumlah = Message::where([
                ['is_read', 0],
                ['to', Session::get('email')]
            ])->count('is_read');

        return view('pesan', compact('users', 'jumlah'));
    }

    public function getMessage($email)
    {
        $my_id = Session::get('email');

        // Make read all unread message
        Message::where(['from' => $email, 'to' => $my_id])->update(['is_read' => 1]);

        // Get all message from selected user
        $messages = Message::where(function ($query) use ($email, $my_id) {
            $query->where('from', $email)->where('to', $my_id);
        })->oRwhere(function ($query) use ($email, $my_id) {
            $query->where('from', $my_id)->where('to', $email);
        })->get();

        // $messages = DB::table('messages')->where('from', $email)->where('to', $my_id)->get();

        return view('messages.index', compact('messages'));
    }

    public function sendMessage(Request $request)
    {
        $from = Session::get('email');
        $to = $request->to;
        $message = $request->message;

        $data = new Message();
        $data->from = $from;
        $data->to = $to;
        $data->message = $message;
        $data->is_read = 0; // message will be unread when sending message
        $data->save();

        // pusher
        // $options = array(
        //     'cluster' => 'ap1',
        //     'useTLS' => true
        // );

        // $pusher = new Pusher(
        //     env('PUSHER_APP_KEY'),
        //     env('PUSHER_APP_SECRET'),
        //     env('PUSHER_APP_ID'),
        //     $options
        // );

        // $data = ['from' => $from, 'to' => $to]; // sending from and to user id when pressed enter
        // $pusher->trigger('my-channel', 'my-event', $data);

        alert()->success('Pesan Berhasil Dikirim!', 'Pesan Terkirim!')->persistent('Close');

        return redirect()->back();
    }
}
