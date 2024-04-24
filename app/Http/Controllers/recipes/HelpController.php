<?php

namespace App\Http\Controllers\recipes;

use App\Http\Controllers\Controller;
use App\Models\Ingrediant;
use App\Models\Recipe;
use App\Models\Review;
use App\Models\Theme;

class HelpController extends Controller
{


    public function details(Recipe $recipe)
    {
        $randomRecipes = Recipe::inRandomOrder()->take(4)->get();
        $countStars = Review::where('recipe_id', $recipe->id)->count();
        
        $nbr_stars = Review::where('recipe_id', $recipe->id)->avg('nbr_stars');
        $stars = intval($nbr_stars);
        return view('user.readMore', compact('nbr_stars', 'recipe', 'randomRecipes', 'stars', 'countStars'));
    }










    public function filtreParIngrediant(Ingrediant $ingrediants)
    {

        $recipes = $ingrediants->recipes()->get();

        return view("user.RecipeFiltre", compact('recipes', 'ingrediants'));
    }



    public function filtreParTheme(Theme $theme)
    {

        $recipes = $theme->recipes()->get();

        return view("user.RecipeFiltre", compact('theme', 'recipes'));
    }


    public function viewMore(Recipe $recipe)
    {
        $recipes = Recipe::paginate(9);
        return view('user.ViewMoreRecipes', compact('recipes'));
    }


    public function show()
    {
        $userId = auth()->user()->id;
        $recipes = Recipe::where('user_id',  $userId)->get();
        return view('user.ownRecipe', compact('recipes'));
    }
}
