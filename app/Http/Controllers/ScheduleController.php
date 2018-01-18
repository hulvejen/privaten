<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Schedule;
use Auth;

class ScheduleController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	   if(Schedule::paginate(3))
       return view('schedules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the form data
		$this->validate($request,[
			'dag' => 'required|max:255',
			'tid' => 'required|max:255'			
		]);
		
		
		// process the data and submit it
		$schedule = new Schedule();
		$schedule->dag = $request->dag;
		$schedule->tid = $request->tid;
		$schedule->user_id = Auth::id();
				
		$schedule->save();
		
				
		//if successful we want to redirect
		if($schedule->save()) {		    
			return redirect()->route('home');		
		}else{
			return redirect()->route('schedules.create');
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {		
        $item = schedule::find($id);
        return view('schedules.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate the form data
		$this->validate($request,[
			'dag' => 'required|max:255',
			'tid' => 'required|max:255'			
		]);
		
		
		// process the data and submit it
		$schedule = schedule::find($id);
		$schedule->dag = $request->dag;
		$schedule->tid = $request->tid;
		$schedule->user_id = Auth::id();
		
			
		$schedule->save();
		
				
		//if successful we want to redirect
		if($schedule->save()) {		    
			return redirect()->route('home');		
		}else{
			return redirect()->route('schedules.create');
		}
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	
	/**
	* Determins if its a create or an edit
	*
	*
	*/
	
}
