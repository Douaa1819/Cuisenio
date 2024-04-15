<?php

namespace App\Http\Controllers;

use App\Models\Ingrediant;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RecipeRequest;
use App\Models\Recipe;
use App\Repositories\IngrediantRepositoryInterface;
use App\Repositories\RecipeRepositoryInterface;
use App\Repositories\ThemeRepositoryInterface;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $recipes;
     protected $themes;
     protected $ingrediant;
     // Inversion of Control (IoC) w Dependency Injection.
         public function __construct(RecipeRepositoryInterface $recipes, ThemeRepositoryInterface $themes,IngrediantRepositoryInterface $ingrediant)
         {
          
            $this->themes = $themes;
             $this->recipes = $recipes;
             $this->ingrediant = $ingrediant;
         }


     
    public function index()
    {
        $themes = $this->themes->all();
        $ingrediants = $this->ingrediant->all();
        
      return view('user.AddRecipes', compact('themes','ingrediants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RecipeRequest $request)
{
        $recipe = Recipe::create($request->validated());
        if ($request->filled('ingredients')) {
            $ingredientIds = Ingrediant::whereIn('name', $request->ingredients)->pluck('id');
            $recipe->ingredients()->sync($ingredientIds);
        }

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('recipe_images', 'public');
            $recipe->images()->create(['url' => $path]);
        }
        return redirect()->route('recipe.index')->with('success', 'Recipe added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
