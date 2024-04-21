<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Support\Facades\Validator;
use App\Repositories\ThemeRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ThemeController extends Controller
{
    protected $themes;
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
        'theme_file' => 'required|file|image|max:2048', 
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $theme = $this->themes->create($request->only(['name']));

    if ($request->hasFile('theme_file')) {
        $path = $request->file('theme_file')->store('ingrediants', 'public');
        $theme->image()->create([
            'url' => $path
        ]);
    }
    $theme->save();

    return redirect()->back()->with('success', 'Theme added successfully!');
}


public function update(Request $request, Theme $theme)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',  
        'theme_file' => 'nullable|file|image|max:2048',  
    ]);

   
    $theme->name = $validated['name'];

   
     if ($request->hasFile('theme_file')) {
        $oldImage = $theme->image;
        if ($oldImage) {
            Storage::delete($oldImage->url); 
            $oldImage->delete(); 
        }

        $path = $request->file('theme_file')->store('ingrediants', 'public');
        $theme->image()->create(['url' => $path]); 
    }
    $theme->save();
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