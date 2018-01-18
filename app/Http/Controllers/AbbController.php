<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Abbinfo;
use App\User;
use Auth;

class AbbController extends Controller
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
		/*$this->validate($request,[
			'address' => 'required|max:2'					
		]);*/
		
		// process the data and submit it
				
		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      	$user    = User::findOrFail($id);	
		$abbinfo = Abbinfo::where('user_id', '=', $id)->get();	
		
		$abbdate = Carbon::createFromFormat('Y-m-d', $abbinfo[0]->abb_date)->formatLocalized('%d-%m-%Y');	
		$abbinfo[0]->abb_date = $abbdate;
		
		$abbdate = Carbon::createFromFormat('Y-m-d', $abbinfo[0]->next_scheduled_date)->formatLocalized('%d-%m-%Y');	
		$abbinfo[0]->next_scheduled_date = $abbdate;
		
		// Show the view and pass the record to view		
        return view('abbs.show')->with('user',$user)->with('abbinfo',$abbinfo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$users = User::where('id', '=', Auth::id())->paginate(1);	
		
        return view('abbs.edit')->with('users',$users);
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
		/*$this->validate($request,[
			'address' => 'required|max:2'					
		]);*/
		
		$abbinfo = Abbinfo::where('user_id',$id)->first();
		
		if(!$abbinfo){
			$abbinfo = new Abbinfo();
			
			$abbinfo->user_id  = $id;
			$abbinfo->abb_date = '2000-01-01';
			$abbinfo->time     = '00:00:00';
			$abbinfo->next_scheduled_date = '2000-01-01';

			$abbinfo->save();
		}
		
		// process the data and submit it
		$user = User::find($id);
		
		$user->address = $request->address;
		$user->zipcode = $request->zipcode;
		$user->city    = $request->city;
		$user->phone   = $request->phone;
			
		$user->save();	
		
		
		//if successful we want to redirect
		if($user->save()) {		
			return redirect()->route('myaccount', $user->id);			
		}else{			
			return redirect()->route('abbs.create');
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
  
    }
}
