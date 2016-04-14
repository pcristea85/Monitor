<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Value;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();
        
        $values = Value::where('user_id', $user->id)->with( ['history' => function($query) {
            $query->orderBy('created_at','desc')->limit(1);
        }])->get();

        return view('home', array('values'=>$values));
    }
}
