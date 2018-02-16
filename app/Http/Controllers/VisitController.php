<?php

namespace App\Http\Controllers;

use App\Abbinfo;
use App\Visit;
use App\Handyman;
use Auth;
use Illuminate\Http\Request;

class VisitController extends Controller
{
	
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth');*/
        $this->middleware('auth:handy');
    }
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $userid)
    {


        // validate the form data
        $this->validate($request,[
            'date' => 'required|max:10',
            'time' => 'required|max:5'
        ]);

        // process the data and submit it
        $visit = new Visit();
        $visit->visitdate = $request->date;
        $visit->visittime = $request->time;
        $visit->agreement = $request->agreement;
        $visit->jobcomment = null; //To be filled after the visit
        $visit->user_id = $userid;
        $visit->handy_id =  Auth::id();
        $visit->handymen_id = $request->handymanId;


        $visit->save();


        //if successful we want to redirect
        if($visit->save()) {
            return redirect()->route('handy.dashboard');
        }else{
            return redirect()->route('visit.create');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function show(Visit $visit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $visit  = Visit::with( 'handy', 'user')->where('id', '=' ,$id)->first();
        $abbinfo = Abbinfo::where('user_id', $visit->user_id)->first();

        /*Det er ikke users der er interessante*/
        return view('visits.editVisit')->with('visit',$visit)->with('abbinfo', $abbinfo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validate the form data

        if(isset($request->date)) {
            $this->validate($request, [
                'date' => 'required|max:14',
                'time' => 'required|max:8'
            ]);
        }

        // process the data and submit it
        $visit = Visit::find($id);

        if(isset($request->date)) {
            $visit->visitdate = $request->date;
            $visit->visittime = $request->time;
            $visit->agreement = $request->agreement;
        }else {
            $visit->jobcomment = $request->jobcomment; //To be filled after the visit
            $visit->done = true;
        }

        $visit->save();

        //if successful we want to redirect
        if($visit->save()) {
            return redirect()->route('handy.dashboard');
        }else{
            return redirect()->route('visit.create');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Visit  $visit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $visit = Visit::find($id);
        $visit->delete();

        return redirect()->route('handy.dashboard');
    }
}
