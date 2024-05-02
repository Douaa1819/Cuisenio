<?php

namespace App\Http\Controllers\recipes;

use App\Models\User;

use App\Models\Theme;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Ingrediant;

class LiveSearchController extends Controller
{
    public function action(Request $request)
    {
        try {
            $query = $request->get('query', '');
            $recipes = Recipe::with('image', 'user')
                ->where('title', 'like', '%' . $query . '%')
                ->orWhere('description', 'like', '%' . $query . '%')
                ->orWhere('list_ingredients', 'like', '%' . $query . '%')
                ->orWhere('season', 'like', '%' . $query . '%')
                ->orderBy('id', 'desc')
                ->get();
            return response()->json($recipes);
        } catch (\Exception $e) {
            Log::error("Error processing request: " . $e->getMessage());
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

  

    
    
}
