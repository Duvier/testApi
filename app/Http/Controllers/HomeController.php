<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\PrealertEvent;

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

    public function alert(){
      broadcast(new PrealertEvent('4Wz892aD5'));
    }
}
