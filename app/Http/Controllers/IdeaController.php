<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;
use App\Models\User;


class IdeaController extends Controller
{
    public function contact() 
    {
        $utilisateur = auth('utilisateur')->user();

        $users = User::all();

        $ideas = Idea::where('utilisateur_id', $utilisateur->id)
        ->where('approved', true)
        ->get();


        return view('contact', ['ideas' => $ideas, 'utilisateur' => $utilisateur]);
    }

    public function home()
    {
        return view('home');
    }

    public function ajout()
    {
        return view('questions.ajouter');
    }


    public function storeIdea(Request $request)
    {
        try {
            $request->validate([
                'idea' => 'required|string|max:1800',
                'case' => 'required|string|max:200'
            ]);
    
            $utilisateur = auth('utilisateur')->user();
    
            if ($utilisateur) {
                $utilisateur->ideas()->create([
                    'content' => $request->input('idea'),
                    'case' => $request->input('case'),
                    'user_id' => $request->input('userid'),
                    'approved' => false, 
                ]);
            }
    
            return redirect()->route('contact');
        } catch (QueryException $exception) {
            if ($exception->errorInfo[1] == 1406) {
                return redirect()->back()->with('error', 'The question is too long. Please enter a shorter content.');
            }
    
            throw $exception;
        }
    }

    public function destroy(Idea $idea)
    {
        $idea->delete();

        return redirect()->back()->with('success', 'Question deleted successfully.');
    }

    public function edit(Idea $idea)
    {
         return view('questions.editer', compact('idea'));
    }

    
    public function update(Request $request, Idea $idea)
    {
        $request->validate([
            'idea' => 'required|string|max:1500',
        ]);

        $idea->update([
            'content' => $request->input('idea'),
        ]);

        return redirect()->route('contact')->with('success', 'Question updated successfully.');
    }

    public function lawyers() 
    {
        $users = User::all();

        return view('users.lawyers', ['users' => $users]);
    }
    
}

