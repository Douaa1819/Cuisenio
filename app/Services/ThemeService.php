<?php

namespace App\Services;

use App\Models\Theme;

class ThemeService
{
    public function getAllThemes()
    {
        return Theme::all();
    }

    /**
     * Crée et retourne un nouveau thème.
     *
     * @param  array  $data
     * @return Theme
     */
    public function createTheme(array $data)
    {
        return Theme::create($data);
    }

    /**
     * Met à jour et retourne le thème.
     *
     * @param  Theme  $theme
     * @param  array  $data
     * @return bool
     */
    public function updateTheme(Theme $theme, array $data)
    {
        return $theme->update($data);
    }

    /**
     * Supprime le thème donné.
     *
     * @param  Theme  $theme
     * @return bool|null
     */
    public function deleteTheme(Theme $theme)
    {
        return $theme->delete();
    }
}
