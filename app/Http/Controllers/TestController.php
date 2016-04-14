<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Value;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Return a test view.
     *
     * @return \Illuminate\Http\Response
     */
    public function testNumeric()
    {
        return view('test.numeric');
    }

    /**
     * Return a test view.
     *
     * @return \Illuminate\Http\Response
     */
    public function testText()
    {
        return view('test.text');
    }
}
