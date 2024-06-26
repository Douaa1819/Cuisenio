<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use App\Models\Recipe;
use App\Models\Ingrediant;
use App\Models\Newsletter;
use App\Mail\NewsletterEmail;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\RecipeRequest;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Repositories\ThemeRepositoryInterface;
use App\Repositories\RecipeRepositoryInterface;
use App\Repositories\IngrediantRepositoryInterface;

class RecipeController extends Controller
{


    protected $recipes;
    protected $themes;
    protected $ingrediant;
    
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


    public function edit(Recipe $recipe)
    {

        $themes = $this->themes->all();
        $recipeIngredientIds = $recipe->ingredients->pluck('id')->toArray();
        $ingrediants = $this->ingrediant->all();
   
        return view('user.EditeRecipe', compact('themes', 'recipe', 'ingrediants','recipeIngredientIds'));
    }






    public function create()
    {
        $recipes = Recipe::all();
        return view('visitor.ViewMore', compact('recipes'));
    }

  

    public function store(RecipeRequest $request)
    {
        $data = $request->validated();
        $userID = Auth::user()->id;
        $data['user_id'] = $userID;
        $recipe = Recipe::create($data);
        $recipe->ingredients()->attach($data['ingredients']);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            try {
                $path = $request->file('image')->store('images', 'public');
                $recipe->image()->create(['url' => $path]);
            } catch (\Exception $e) {
                Log::error("Failed to upload image: " . $e->getMessage());
                return back()->withErrors('Failed to upload image. Please try again.');
            }
        }
        if ($recipe) {
            $this->sendEmailToSubs($recipe);
        }
        return redirect()->route('recipes.store')->with('success', 'Recipe added successfully!');
    }


    public function sendEmailToSubs(Recipe $recipe)
    {
        $subscribers = Newsletter::where('subscribed', true)->get();

        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->send(new NewsletterEmail($recipe->id));
        }
    }






    

    
    public function update(RecipeRequest $request, Recipe $recipe)
    {
        $data = $request->validated();
        $userID = Auth::user()->id;

        $data['user_id'] = $userID;
        try {
            if (!empty($data['ingredients'])) {
                $recipe->ingredients()->sync($data['ingredients']);
            }
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $existingImage = $recipe->image;
                if ($existingImage) {
                    Storage::delete($existingImage->url);
                    $existingImage->delete();
                }
                $path = $request->file('image')->store('images', 'public');
                $recipe->image()->create(['url' => $path]);
            }
            $recipe->update($data);
            return redirect()->route('recipes.edit', $recipe->id)->with('success', 'Recipe and images updated successfully!');
        } catch (\Exception $e) {
            Log::error("Error updating recipe: " . $e->getMessage());
            return back()->withErrors('An error occurred while updating the recipe. Please try again.');
        }
    }






    public function destroy(Recipe $recipe)
    {
        if ($recipe->image) {
            Storage::disk('public')->delete($recipe->image);
            $recipe->image->delete();
        }


        $recipe->ingredients()->detach();
        $recipe->delete();

        return redirect()->route('My.recipe')->with('success', 'Recipe deleted successfully!');
    }
}
