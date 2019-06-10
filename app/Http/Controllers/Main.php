<?php

namespace App\Http\Controllers;

use App\Mail\Mailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Main extends Controller
{

    public function index(){
        return view('index');
    }

    public function send(){
        Mail::to("andrey@innstant.com")->send(new Mailer());
        return view('success');
    }
}
