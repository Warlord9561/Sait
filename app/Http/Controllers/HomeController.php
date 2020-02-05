<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests\ZakazRequest;
use Auth;
use App\Zakaz;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function postindex(ZakazRequest $r){
         
            $r['userId'] = Auth::user()->id;
         Zakaz::create($r->all());
         return redirect()->back(); 
    }
}
