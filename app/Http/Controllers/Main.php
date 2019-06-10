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
        $request = \request();
        $image = $request->post('image');
        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);
        $image = base64_decode($image);
        $mail = $request->post('mail');
        $contact = $request->post('contact');
        $nameImage = public_path() . '/assets/saved/'  . rand(000000000, 999999999) .'.png';
        $avatar_uri = file_put_contents($nameImage, $image);

        //Mail::to("andrey@innstant.com")->send(new Mailer());
        return view('success');
    }
}
