<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function get(){
        return 'test get';
    }

    public function post(){
        return 'test post';
    }
}
