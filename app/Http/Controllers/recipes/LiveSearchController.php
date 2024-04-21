<?php
namespace App\Http\Controllers\recipes;

use App\Http\Controllers\Controller;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LiveSearchController extends Controller
{
    public function action(Request $request)
    {
        try {
            $query = $request->get('query', '');
            $recipes = Recipe::with('image')
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

