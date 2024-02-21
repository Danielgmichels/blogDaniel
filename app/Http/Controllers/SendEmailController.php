<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function index(){
        $result = Mail::to("davigmichels@gmail.com")->send(new SendMail("vsf mlk, tmj", "Daniel"));

        return ($result) ? "Email enviado" : "Erro";
    }
}
