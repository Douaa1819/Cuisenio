<?php

namespace App\Http\Controllers;

use App\Models\favoris;

use App\Http\Requests\FavorisRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavorisController extends Controller
{

    public function index()
    {
        $user = Auth::user();
    
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please log in to view favorites');
        }
    
        $favorites = $user->favoris; 
        $favoriteRecipes = [];
        foreach ($favorites as $favorite) {
            $favoriteRecipes[] = $favorite->recipe; 
        }
    
        return view('user.favorits', compact('favoriteRecipes'));
    }
    
    
    

   
    public function store(FavorisRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        $favori = favoris::create($data);
        return response()->json(['favori' => $favori->id]);
    }

   
    public function destroy(favoris $favori)
    {
        $favori->delete();
        $recipe = $favori->recipe->id;
        return response()->json(['recipe' => $recipe]);
    }
}
