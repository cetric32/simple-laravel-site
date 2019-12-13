<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Illuminate\Pagination\LengthAwarePaginator;


class HomeController extends Controller
{
    public function index(){
        $messages = Message::orderBy('created_at','desc')->paginate(4);

        return view('home',[
            'messages'=> $messages
        ]);
    }

}
