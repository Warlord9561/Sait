<?php

namespace App\Http\Controllers;
use App\Maintext;


class Basecontroller extends Controller
{
	public function getindex (){
		$obj= Maintext::where('url','index')->first();
    return view('index' ,compact ('obj'));
 	}
	`
    
}
