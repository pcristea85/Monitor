<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Value;
use App\ValueHistoric;
use Auth;

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
    public function show($id)
    {
        $value = Value::findOrFail($id);

        if($value->user_id != Auth::user()->id) {
            abort(404);
        }

        $values_history = ValueHistoric::where('value_id', $value->id)->get();

        return view('value.details', array('value'=>$value, 'values_history'=>$values_history));
    }

    /**
     * Show/Edit the Value properties.
     *
     * @return \Illuminate\Http\Response
     */
    public function modify(Request $request, $id)
    {
        $value = Value::findOrFail($id);



        if ($request->method() == "POST") {



            $this->validate($request, [
                'name' => 'required|max:255|unique:values,name,'.$value->id,
                'css_rule' => 'required|max:255',
                'type' => 'required|in:text,numeric',
                'url' => 'required|url',
                'value'=>'required|max:255'
            ]);

            $value->name = $request->name;
            $value->css_rule = $request->css_rule;
            $value->user_id = Auth::user()->id; 
            $value->type = $request->type;
            $value->url = $request->url;
            $value->alert = $request->alert;
            $value->value = $request->value;

            $value->save();

            return redirect('value/details/'.$value->id);
        }

        return view('value.edit', array('value'=>$value));
    }

    /**
     * Show/Create a new Value.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        if ($request->method() == "POST") {
            $this->validate($request, [
                'name' => 'required|unique:values|max:255',
                'css_rule' => 'required|max:255',
                'type' => 'required|in:text,numeric',
                'url' => 'required|url',
                'value'=>'required|max:255'
            ]);

            // create value
            $value = new Value;

            $value->name = $request->name;
            $value->css_rule = $request->css_rule;
            $value->user_id = Auth::user()->id; 
            $value->type = $request->type;
            $value->url = $request->url;
            $value->value = $request->value;

            $value->save();

            // return to home page
        }
    
        return view('value.create');
    }
}