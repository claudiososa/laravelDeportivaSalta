<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class PagesController extends Controller
{
    public function home(){
      $messages = Message::latest()->paginate(10);
      //dd($messages);
      return view('welcome',['messages' => $messages]);
    }

    public function aboutUs(){
      return view('about');
    }
}
