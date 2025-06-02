<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Utilisateur;

class UtilisateurController extends Controller
{   
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('utilisateur.register-utilisateur');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:utilisateurs',
            'password' => 'required|min:6', 
        ]);

        $utilisateur = new Utilisateur([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'approved' => 0,
        ]);

        $utilisateur->save();

        return redirect()->route('utilisateur-dashboard')->with('success', 'Utilisateur registered successfully.');
    }


    
    public function edit()
    {
        $utilisateur = auth()->guard('utilisateur')->user();
        return view('utilisateur.editutilisateur', compact('utilisateur'));
    }

    public function update(Request $request)
    {
    $utilisateur = auth()->guard('utilisateur')->user();

    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'password' => 'nullable|string|min:6',
    ]);

    $data = [
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
    ];

    if ($request->filled('password')) {
        $data['password'] = Hash::make($request->input('password'));
    }

    $utilisateur->update($data);

    return redirect()->route('contact')->with('success', 'Profile updated successfully');
    
    }

    
    public function login() 
    {
        return view('utilisateur.login');    
    }

    public function check(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('utilisateur')->attempt($credentials)) {
            $utilisateur = Auth::guard('utilisateur')->user();
            
            if ($utilisateur->approved) {
                return redirect()->route('contact');
            } else {
                Auth::guard('utilisateur')->logout();
                return redirect()->back()->with('error', 'Your account is not yet approved by the admin.');
            }
        } else {
                return redirect()->back()->with('error', 'Your credentials are invalid');
        }
    }

    public function newdash() 
    {
        return view('newdash');    
    }

    public function contact() 
    {

        $ideas = Idea::all();


        return view('contact', ['ideas' => $ideas]);    
    }

    public function home()
    {
        return view('home');
    }

     public function logout(Request $request)
    {
        Auth::guard('utilisateur')->logout();

        $request->session()->invalidate();

        return redirect()->route('login_page');
    }



    
}
