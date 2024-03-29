<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThemeRequest;
use App\Models\Theme;
use App\Services\ThemeService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ThemeController extends Controller
{
    protected $themeService;

    public function __construct(ThemeService $themeService)
    {
        $this->themeService = $themeService;
    }

    public function index(): View
    {
        $themes = $this->themeService->getAllThemes();
        return view('themes.index', compact('themes'));
    }


    public function create(): View
    {
        return view('themes.create');
    }


    public function store(ThemeRequest $request): RedirectResponse
    {
        $this->themeService->createTheme($request->validated());
        return redirect()->route('themes.index')->with('success', 'Thème créé avec succès.');
    }

    /**
     * Affiche un thème spécifique.
     */
    public function show(Theme $theme): View
    {
        return view('themes.show', compact('theme'));
    }

    public function edit(Theme $theme): View
    {
        return view('themes.edit', compact('theme'));
    }


    public function update(ThemeRequest $request, Theme $theme): RedirectResponse
    {
        $this->themeService->updateTheme($theme, $request->validated());
        return redirect()->route('themes.index')->with('success', 'Thème mis à jour avec succès.');
    }

    public function destroy(Theme $theme): RedirectResponse
    {
        $this->themeService->deleteTheme($theme);
        return back()->with('success', 'Thème supprimé avec succès.');
    }
}
