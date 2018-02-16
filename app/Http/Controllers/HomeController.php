<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Task;
use App\Schedule;
use App\User;
use App\Abbinfo;

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
		
		$tasks     = Task::where('user_id','=', Auth::id())->get();
		$schedules = Schedule::where('user_id','=', Auth::id())->paginate(1);
		
		$abbinfo   = Abbinfo::where('user_id','=', Auth::id())->paginate(1);
			
		if (is_null($abbinfo[0])){
			
			return  view('abbs.store')->with('users',$users);
		};
		
		$abbinfo   = Abbinfo::where('user_id','=', Auth::id())->paginate(1);
	 	

		//Chanhe of database format to our format
		
        $abbdate = Carbon::createFromFormat('Y-m-d', $abbinfo[0]->abb_date)->formatLocalized('%d-%m-%Y');	
		$abbinfo[0]->abb_date = $abbdate;
		
		
		$abbdate = Carbon::createFromFormat('Y-m-d', $abbinfo[0]->next_scheduled_date)->formatLocalized('%d-%m-%Y');	
		$abbinfo[0]->next_scheduled_date = $abbdate;
		
		
		// Show the view and pass the record to view
		return view('home')->with('tasks',$tasks)->with('schedules',$schedules)->with('users',$users)->with('abbinfo',$abbinfo);
		
    }
	

}
