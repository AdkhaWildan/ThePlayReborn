<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function store()
    {
        if(Auth::id())
        {
            $usertype=Auth()->user()->usertype;

            if($usertype=='user')
            {
                    return view('dashboard');
            }

            else if($usertype=='admin')
            {
                    return view('admin.admindashboard');
            } 

            else 
            {
                return redirect()->back();
            }
        }
    }

    public function post()
    {
        return view('admin.adminpost');
    }
}