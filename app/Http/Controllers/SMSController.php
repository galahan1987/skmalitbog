<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SMSController extends Controller
{
    public function send(Request $request){
        if(request()->isMethod("post")){
            return request();
        }
        return view("sms");
    }
}
