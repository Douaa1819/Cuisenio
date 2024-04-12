<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Repositories\ThemeRepositoryInterface;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    protected $themes;
// Inversion of Control (IoC) w Dependency Injection.
    public function __construct(ThemeRepositoryInterface $themes)
    {
        $this->themes = $themes;
    }

    public function index()
    {
        $themes = $this->themes->all();
        return view('themes.index', compact('themes'));
    }

    public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'theme_file' => 'file|image|max:2048', 
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $theme = $this->themes->create($request->only(['name']));

    if ($request->hasFile('theme_file')) {
        $path = $request->file('theme_file')->store('public/images', 'public');
        // Ajout de l'image dans la table des images
        $theme->images()->create([
            'url' => $path
        ]);
    }

    return redirect()->back()->with('success', 'Theme added successfully!');
}

}    