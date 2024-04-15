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
        'theme_file' => 'required|file|image|max:2048', 
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
    // Step 1: Validate the incoming request
    $validated = $request->validate([
        'name' => 'required|string|max:255',  // Validate that 'name' is required and is a string of max length 255
        'theme_file' => 'nullable|file|image|max:2048',  // 'theme_file' must be a file, specifically an image, and optionally present, with a max size
    ]);

    // Step 2: Update the theme's name
    $theme->name = $validated['name'];

    // Step 3: Check if a new file has been uploaded
    if ($request->hasFile('theme_file')) {
        // Store the file in the 'public/themes' directory within the public disk and get the path
        $path = $request->file('theme_file')->store('themes', 'public');

        // Update the image_url attribute with the new file path
        $theme->image_url = $path;
    }

    // Step 4: Save the changes to the database
    $theme->save();

    // Step 5: Redirect to a given route with a success message
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