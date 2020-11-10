<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

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

    public function loggedInAsUser($userId)
    {
        $adminId = Auth::id();
        Session::put('key', $adminId);
        // dd($id);
        if (Auth::loginUsingId($userId))
        {
            return redirect()->intended('user/dashboard');
            // return view('user.index', compact('id'));
        }
        else
        {
            return 'ERROR';
        }
        
        // Auth::loginUsingId($userId);
        // return view('user.index');
    }

    public function backToadmin()
    {
        $admin = Session::get('key');
        // dd($admin);

        if (Auth::loginUsingId($admin))
        {
            return redirect()->route('admin.dashboard');
            // return view('user.index', compact('id'));
        }
        else
        {
            return 'ERROR';
        }
    }

    
}
