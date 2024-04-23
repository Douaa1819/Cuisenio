<?php

namespace App\Http\Controllers;

use App\Http\Requests\FavorisRequest;
use App\Models\favoris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavorisController extends Controller
{
   
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
