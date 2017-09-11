<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Http\Requests\CreateMessageRequest;
class MessagesController extends Controller
{
    public function show(Message $message){
      //ir a buscar el Message por ID
      //$message = Message::find($id);

      return view('messages.show',['message' => $message]);
      //Una view de un message
    }
    public function create(CreateMessageRequest $request){
            //dd($request->all());
          $user = $request->user();
          //dd($user);
          $message = Message::create([
            'user_id' => $user->id,
            'content' =>$request->input('message'),
            'image' => 'http://lorempixel.com/600/338?'.mt_rand(0,1000
            )

          ]);
          //dd($message);
          return redirect('/messages/'.$message->id);

    }
}
