<?php

namespace App\Repositories;

use App\Models\Recipe;

class RecipeRepository implements RecipeRepositoryInterface
{
    public function all()
    {
        return Recipe::all();
    }

    public function find($id)
    {
        return Recipe::find($id);
    }

    public function create($attributes)
    {
        return Recipe::create($attributes);
        
    }

    public function update($id, $attributes)
    {
        $recipe = Recipe::find($id);
        $recipe->update($attributes);
        return $recipe;
    }

    public function delete($id)
    {
        return Recipe::destroy($id);
    }
}
