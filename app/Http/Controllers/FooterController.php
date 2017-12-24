<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {	    
		return view('footerpages.about');		
    }
	
	public function contact()
    {	    
		return view('footerpages.contact');		
    }
	    
	public function privacy()
    {	    
		return view('footerpages.privacy');		
    }
}