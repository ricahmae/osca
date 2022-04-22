<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    Public function dashboard()
    {
        $data = ['LoggedUserInfo' => User::where('id', '=', session('LoggedUser'))->first()];
        
        return view('admin.dashboard',$data); //admin dashboard
    }
    Public function dashboard2()
    {
        $data = ['LoggedUserInfo' => User::where('id', '=', session('LoggedUser'))->first()];
        
        return view('admin.dashboard2',$data); //admin dashboard
    }
}
