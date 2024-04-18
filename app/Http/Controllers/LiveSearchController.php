<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LiveSearchController extends Controller
{
    public function action(Request $request)
    {
        if ($request->ajax()) {
            $query = $request->get('query', '');
    
            $recipes = Recipe::with('images')  
                ->where('title', 'like', '%' . $query . '%')
                ->orWhere('description', 'like', '%' . $query . '%')
                ->orWhere('list_ingredients', 'like', '%' . $query . '%')
                ->orWhere('season', 'like', '%' . $query . '%')
                ->orderBy('id', 'desc')
                ->get();
    
            return response()->json($recipes); 
        }
        }
    }

