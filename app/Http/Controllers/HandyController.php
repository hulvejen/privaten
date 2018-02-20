<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;


use Auth;
use App\User;
use App\Abbinfo;
use App\Schedule;
use App\Task;
use App\Handy;
use App\Handyman;
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

        // Use the model to get 1 record from the database
        $visits  = Visit::with( 'handy', 'user')->where('handy_id', '=' ,Auth::id())->where('done', '=', 0)->get();

        foreach($visits as $visit){
            $abbinfos[] = Abbinfo::where('user_id', '=' ,$visit->user_id )->first();
            $tasks[]    = Task::where('user_id', '=', $visit->user_id )->get();
        }

        $noVisitsPlanned=false;

        if (count($visits)===0) {
            $noVisitsPlanned=true;
            $abbinfos = 0; //fordi man kan i PHP
            $tasks = 0;
        }

        return view('handy.index')->with('visits', $visits)->with('abbinfos', $abbinfos)->with('tasks', $tasks)->with('noVisitsPlanned', $noVisitsPlanned);

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
    public function show()
    {

        // Use the model to get 1 record from the database
        $handy = Handy::with('handymen','visit')->where('id',Auth::id())->get();
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
        $usrs  = User::with( 'task')->leftJoin('visits', 'users.id','=', 'user_id')
                 ->leftjoin('abbinfos', 'abbinfos.user_id', '=', 'users.id')->get();


        foreach ($usrs as $key => $usr) {
            if ($usr->done == 0) {
                foreach ($usrs as $rmkey => $rmuser) {
                    if($rmuser->email == $usr->email){
                        $usrs->pull($rmkey);
                    }
                }
            }

            if ($usr->done == 1) {
                $notfirst = 0;
                foreach ($usrs as $rmkey => $rmuser) {
                    if($rmuser->email == $usr->email && $notfirst){
                        $usrs->pull($rmkey);
                    }
                    $notfirst=1;
                }
            }

        }

        // Show the view and pass the record to view
        return view('handy.showOpen')->with('users',$users)->with('usrs',$usrs);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showDone()
    {

        // Use the model to get 1 record from the database
        $visits = Visit::with( 'handy', 'user')->where('handy_id', Auth::id())->where('done', 1)->get();

        $noVisitsPlanned=false;

        if (count($visits)===0) {
            $noVisitsPlanned=true;
            $abbinfo = 0; //fordi man kan i PHP
        }else {
            $abbinfo = Abbinfo::where('user_id', '=', $visits[0]->user_id)->get();
        }
        
             // Show the view and pass the record to view
        return view('handy.showDone')->with('visits',$visits)->with('abbinfo',$abbinfo)->with('noVisitsPlanned', $noVisitsPlanned);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function editSingleOpen($id)
    {
        $user = User::with(  'abbinfo')->where('id', $id)->get();
        $tasks = Task::where('user_id', '=', $id )->where('done', '=', 'false' )->get();
        $handyman = Handyman::where('handy_id', '=', Auth::id())->get();



        return view('handy.editSingleOpen')->with('user',$user)->with('tasks',$tasks)->with('handyman',$handyman);
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
