<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Test;

use App\Http\Requests;

class TestController extends Controller
{
    public function index () {
        $tests = Test::All();
        return view('test.mostrar',['tests'=> $tests]);
    }
}
