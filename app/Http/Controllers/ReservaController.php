<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservaController extends Controller
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
        return view('reserva');
    }

    public function index2()
    {
        return view('reserva');
    }
}
