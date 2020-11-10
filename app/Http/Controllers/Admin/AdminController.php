<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
// use App\LogActivity;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
    	$users = User::where('role_id', 2)->get();
        return view('admin.index', compact('users'));
    }
}
