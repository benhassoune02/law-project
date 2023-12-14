<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Utilisateur;
use App\Models\Idea;
use App\Models\Comment;


class AdminLoginController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }

    public function checklogin(Request $request)
    {
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email'=>$check['email'],'password'=>$check['password']])) {
            return redirect()->route('admin.utilisateurs.index');
        }else{
            return redirect()->back()->with('error','Your Credentials are invalid');
        }
    }

    public function adminlogout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        return redirect()->route('admin.dashboard.login');
    }

    public function admindashboard(){

        $userCount = User::count();
        $lawyerCount = Utilisateur::count();
        $questionCount = Idea::count();
        $commentCount = Comment::count();

        return view('admin.admindashboard.index', compact('userCount', 'lawyerCount', 'questionCount', 'commentCount'));
    }


}
