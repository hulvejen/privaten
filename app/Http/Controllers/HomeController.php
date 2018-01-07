<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Schedule;
use App\User;

use Auth;

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
				
		$users = User::where('id', '=', Auth::id())->paginate(1);
		
		$tasks = Task::where('user_id','=', Auth::id())->paginate(2);	
		$schedules = Schedule::where('user_id','=', Auth::id())->paginate(1);
		
		// Show the view and pass the record to view
		return view('home')->with('tasks',$tasks)->with('schedules',$schedules)->with('users',$users);
		
    }
	

}
