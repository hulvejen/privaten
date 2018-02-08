<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Auth;
use App\User;
use App\Abbinfo;
use App\Schedule;
use App\Task;
use App\Handy;
use App\Visit;

class HandyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:handy');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::whereHas( 'visit', function ($query){
            $query->where('handy_id', '=', '1');
        })->get();

        /*Det er ikke users der er interessante*/
        return view('handy.index')->with('users',$users);
		
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // Use the model to get 1 record from the database
        $handy = Handy::with('handymen','visit')->where('id',$id)->get();

        // Show the view and pass the record to view
        return view('handy.show')->with('handy',$handy);
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function showOpen()
    {

        // Use the model to get 1 record from the database
        $users = User::doesntHave('visit')->get();

        // Show the view and pass the record to view
        return view('handy.showOpen')->with('users',$users);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showDone($id)
    {

        // Use the model to get 1 record from the database
        $visits = Visit::with( 'handy', 'user')->where('id', $id)->where('done', 1)->get();

        $abbinfo = Abbinfo::where('user_id',  '=',  $visits[0]->user_id)->get();

           // Show the view and pass the record to view
        return view('handy.showDone')->with('visits',$visits)->with('abbinfo',$abbinfo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
	

}
