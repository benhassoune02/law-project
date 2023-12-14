<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Utilisateur;
use App\Models\Idea; 
use App\Models\User; 
use App\Models\Comment; 
use Illuminate\Support\Facades\Hash;

class AdminUtilisateurController extends Controller
{
    public function index()
    {
        $utilisateurs = Utilisateur::all();
        return view('admin.utilisateurs.index', compact('utilisateurs'));
    }

    public function destroy($id)
    {
        $utilisateur = Utilisateur::find($id);
    
        if (!$utilisateur) {
            return redirect()->route('admin.utilisateurs.index')->with('error', 'Utilisateur not found.');
        }
    
        $utilisateur->ideas()->delete();
    
        $utilisateur->delete();
    
        return redirect()->route('admin.utilisateurs.index')->with('success', 'Utilisateur deleted successfully.');}
    
        public function store(Request $request)
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
        ]);

        $utilisateur->save();

        return redirect()->route('admin.utilisateurs.index')->with('success', 'Utilisateur registered successfully.');
    }
    public function questionindex()
    {
        $ideas = Idea::all();

        return view('admin.adminquestions.index', ['ideas' => $ideas]);
    }
    public function destroyquestion(Idea $idea)
    {
        

        $idea->delete();

        return redirect()->back()->with('success', 'Comment deleted successfully.');
    }

    public function userindex()
    {
        $users = User::all();

        return view('admin.adminusers.index', ['users' => $users]);
    }

    public function commentindex()
    {
        $comments = Comment::all();

        return view('admin.admincomments.index', ['comments' => $comments]);
    }

    public function addUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'location' => 'required|string|max:255',
            'domaine' => 'required|string|max:255',
            'password' => 'required|min:8',
            
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->location = $request->input('location');
        $user->domaine = $request->input('domaine');
        $user->password = bcrypt($request->input('password'));
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('profile_images', 'public');
            $user->image = $imagePath;
        }
    
        $user->save();
    
        return redirect()->back()->with('success', 'User added successfully');
    }

    public function approveIdea($ideaId)
    {
        $idea = Idea::find($ideaId);

        if (!$idea) {
        // Handle not found...
        }

        // Update the 'approved' field to true
        $idea->update(['approved' => true]);

        return redirect()->back()->with('success', 'Idea approved successfully.');
    }

    public function approveUtilisateur($utilisateurId)
    {
        $utilisateur = Utilisateur::find($utilisateurId);

        if (!$utilisateur) {
        
        }

        $utilisateur->update(['approved' => true]);

        return redirect()->back()->with('success', 'Idea approved successfully.');
    }
}
