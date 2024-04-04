<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truyen;

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
        $lietke_truyen = Truyen::orderBy('luotxem','DESC')->paginate(5);
        return view('home')->with(compact('lietke_truyen'));
    }
}
