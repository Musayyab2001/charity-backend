<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\View;


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
        // Fetch the Site Settings object
        $this->site_settings = User::all();
        View::share('site_settings', $this->site_settings);

        return view('home');
    }
}
