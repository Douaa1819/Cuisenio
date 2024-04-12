<?php

namespace App\Repositories;

use App\Models\Ingrediant;

class IngrediantRepository  implements IngrediantRepositoryInterface
{
    public function all()
    {
        return Ingrediant::all();
    }

    public function find($id)
    {
        return Ingrediant::find($id);
    }

    public function create($attributes)
    {
        return Ingrediant::create($attributes);
    }

    public function update($id, $attributes)
    {
        $ingrediant = Ingrediant::find($id);
        $ingrediant->update($attributes);
        return $ingrediant;
    }

    public function delete($id)
    {
        return Ingrediant::destroy($id);
    }
}
