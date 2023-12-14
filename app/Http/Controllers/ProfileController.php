<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Idea; 
use App\Models\User;
use App\Models\Utilisateur;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroyuser($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.adminusers.index')->with('success', 'Utilisateur deleted successfully');
    }

    public function allIdeas()
    {   
        $utilisateur = Utilisateur::all();
        
        $user = auth()->guard('web')->user();

        $ideas = Idea::where('approved', true)
        ->get();

        return view('ideas.index', ['ideas' => $ideas]);
    }

    
    public function show($id)
    {
        $idea = Idea::findOrFail($id);

        return view('ideas.show', ['idea' => $idea]);
    }

    public function index()
    {
        $utilisateurs = Utilisateur::all();

        return view('users.index', compact('utilisateurs'));
    }

    public function logout(Request $request)
    {
        Auth::guard('user')->logout();

        $request->session()->invalidate();

        return redirect()->route('');
    }

    
}
