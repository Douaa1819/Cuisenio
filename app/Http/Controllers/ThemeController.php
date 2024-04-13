<?php

namespace App\Http\Controllers;

use App\Models\Theme;
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

    public function see()
    {
        $Themes = $this->themes->all();
        foreach ($Themes as $Theme) {
            $Theme->images = $Theme->images;  
        }
        return view('admin.Theme-management', compact('Themes'));
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

    $path = $request->file('theme_file')->store('images', 'public');
    $theme->images()->create([
        'url' => $path
    ]);
    

    return redirect()->back()->with('success', 'Theme added successfully!');
}


public function update(Request $request, Theme $theme)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'theme_file' => 'file|image|max:2048', 
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    
    $updatedTheme = $this->themes->update($theme, $validator);

    return redirect()->back()->with('success', 'Theme updated successfully!');
}



public function destroy($id)
{
    if ($this->themes->delete($id)) {
        return redirect()->back()->with('success', 'Theme deleted successfully.');
        
    } else {
        return back()->withErrors('Unable to delete theme.');
    }
}

}    