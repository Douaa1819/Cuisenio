<?php

namespace App\Repositories;

use App\Models\Theme;

class ThemeRepository implements ThemeRepositoryInterface
{
    public function all()
    {
        return Theme::all();
    }

    public function find($id)
    {
        return Theme::find($id);
    }

    public function create($attributes)
    {
        return Theme::create($attributes);
    }

    public function update($id, $attributes)
    {
        $theme = Theme::find($id);
        $theme->update($attributes);
        return $theme;
    }

    public function delete($id)
    {
        return Theme::destroy($id);
    }
}
