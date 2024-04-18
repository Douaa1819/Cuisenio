<?php

namespace App\Http\Controllers;

use App\Models\Ingrediant;
use App\Http\Requests\RecipeRequest;
use App\Models\Recipe;
use App\Models\Theme;
use App\Repositories\IngrediantRepositoryInterface;
use App\Repositories\RecipeRepositoryInterface;
use App\Repositories\ThemeRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $recipes;
    protected $themes;
    protected $ingrediant;
    // Inversion of Control (IoC) w Dependency Injection.
    public function __construct(RecipeRepositoryInterface $recipes, ThemeRepositoryInterface $themes, IngrediantRepositoryInterface $ingrediant)
    {

        $this->themes = $themes;
        $this->recipes = $recipes;
        $this->ingrediant = $ingrediant;
    }



    public function index()
    {
        $themes = $this->themes->all();
        $ingrediants = $this->ingrediant->all();

        return view('user.AddRecipes', compact('themes', 'ingrediants'));
    }
    public function see()
    {   $recipes = Recipe::all();
        $themes = $this->themes->all();
        $ingrediants = $this->ingrediant->all();

        return view('user.EditeRecipe', compact('themes', 'recipes','ingrediants'));
    }

    public function filtreParTheme(Theme $theme)
    {
        $recipes = $theme->recipes()->get();
        
        return view("user.RecipeWithTheme", compact('theme','recipes'));
    }

  


    
    public function show()
    {
        $recipes = Recipe::all();
        return view('user.ownRecipe', compact('recipes'));
    }



    public function create()
    {
        $recipes = Recipe::all();
        return view('visitor.ViewMore', compact('recipes'));
    }

    public function ReadMore()
    {
        $recipes = Recipe::all();
        return view('visitor.ReadMore', compact('recipes'));
    }



        public function details(Recipe $recipe)
    {
        return view('user.readMore',compact('recipe'));
    }

    public function store(RecipeRequest $request)
    {
    $recipe = Recipe::create($request->validated());

    if ($request->filled('ingredients')) {
        $ingredientIds = Ingrediant::whereIn('name', $request->ingredients)->pluck('id');
        $recipe->ingredients()->sync($ingredientIds);
    }

    if ($request->hasFile('image')) {
        try {
            $path = $request->file('image')->store('images', 'public');
            $recipe->images()->create(['url' => $path]);
        } catch (\Exception $e) {
           Log::error("Failed to upload image: " . $e->getMessage());
        }
    }
    
    return redirect()->route('recipes')->with('success', 'Recipe added successfully!');
}



    
    public function viewMore(Recipe $recipe)
    {
    $recipes = Recipe::all();
    return view('user.ViewMoreRecipes', compact('recipes'));
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
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'theme_id' => 'required|integer|exists:themes,id',
            'list_ingredients' => 'sometimes|string',
            'duration_preparation' => 'required|integer',
            'steps' => 'required|string',
            'level' => 'required|in:easy,average,advanced',
            'season' => 'required|in:winter,spring,summer,autumn',
            'image' => 'sometimes|file|image|max:2048',
        ]);
        $recipe->update($validated);
       
        if ($request->hasFile('image')) { 
            try {
                foreach ($recipe->images as $image) {
                    Storage::delete($image->url);
                    $image->delete();
                }
                $path = $request->file('image')->store('public/recipe_images');
                $recipe->images()->create(['url' => $path]);
    
                return redirect()->route('recipes.edit', $recipe->id)->with('success', 'Recipe and images updated successfully!');
            } catch (\Exception $e) {
                return redirect()->route('recipes.edit', $recipe->id)->with('error', 'Failed to update images: ' . $e->getMessage());
            }
        }

        return redirect()->route('recipes.edit');
    }
        

    public function destroy(Recipe $recipe)
    {
        foreach ($recipe->images as $image) {
            Storage::disk('public')->delete($image->url);
            $image->delete();
        }


        $recipe->ingredients()->detach();
        $recipe->delete();

        return redirect()->route('My.recipe')->with('success', 'Recipe deleted successfully!');
    }
}
