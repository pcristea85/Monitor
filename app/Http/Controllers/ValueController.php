<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class ValueController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the details dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('details');
    }

    public function modify(array $data)
    {
        //Validate here

        return view('details');
    }

    public function create(array $data = null)
    {

        if($data != null) dd($data);

        return view('create');
    }
}
