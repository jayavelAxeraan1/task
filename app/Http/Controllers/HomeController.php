<?php

namespace App\Http\Controllers;

use DB; 
use App\Models\Feedback;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        if(Auth::user()->type == 'admin'){
            // $name = Auth::user()->name;
           return redirect('/dashboard');
        // return view('dashboard',['name'=>$name]);

        }else{
            $select =DB::select('select * from drop_names');
            return view('home',['select'=>$select]);
        }
    }

    public function feedback(Request $request){

        $validate= $request->validate(["drop_names"=>"required", "message"=>"required|min:5"]);

        $feedbacks= new Feedback;
        $feedbacks->drop_names=$request->drop_names;
        $feedbacks->message=$request->message;
        $feedbacks->save();


        return redirect('/home')->with('message','Feedback Success');
    }
}

