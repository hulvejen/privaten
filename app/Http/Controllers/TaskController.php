<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Task;
use App\Visit;
use Auth;

class TaskController extends Controller
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
    	//Go to the model and get a group of models
		$tasks = Task::where('user_id','=', Auth::id())->where('done', '=', true)->paginate(2);  //Use Task::all() if you wants to get all at once. Then remove $tasks->links() as it will not work with all.
		
		//return the view, and pass in the group of records to loop through
		return view('tasks.index')->with('tasks',$tasks);
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
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
			'task' => 'required|max:255',
			'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4096'			
		]);
		
		// process the data and submit it
		$task = new Task();
		$task->task = $request->task;
		$task->user_id = Auth::id();
		

		//upload picture
		if(Input::hasFile('image')){
			$task->image = $request->image->hashName();
			$request->file('image')->storePublicly('public/uploads');				
		}
				
		$task->save();
		
				
		//if successful we want to redirect
		if($task->save()) {		    
			return redirect()->route('tasks.show', $task->id);			
		}else{
			return redirect()->route('tasks.create');
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
        // Use the model to get 1 record from the database
		$task = Task::findOrFail($id);		
		
		// Show the view and pass the record to view
		return view('tasks.show')->with('task',$task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

        $task = Task::find($id);

        if($request->done === 'on')
            $task->done = true;
        else
            $task->done = false;


        $task->task = $request->task;


        $task->save();

        //if successful we want to redirect
        if($task->save()) {
            return redirect()->route('home');
        }else{
            return redirect()->route('task.show');
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


    public function oldvisits($id){

        $visits = Visit::where('user_id' , '=', $id)->where('done', '=', 1)->get();

        return $visits;

    }


}
