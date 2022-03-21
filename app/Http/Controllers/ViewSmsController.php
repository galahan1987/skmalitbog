<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewSmsController extends Controller
{
    public function view(){

        return view('sms');
    }
}
