<?php

namespace App\Http\Controllers;

use App\Models\Ingrediant;
use Illuminate\Support\Facades\Validator;
use App\Repositories\IngrediantRepositoryInterface;
use Illuminate\Http\Request;;

class IngrediantController extends Controller
{


    protected $ingrediantRepo;

    public function __construct(IngrediantRepositoryInterface $ingrediantRepo)
    {
        $this->ingrediantRepo = $ingrediantRepo;
    }

    public function see()
    {

        $ingrediants = $this->ingrediantRepo->all();
        foreach ($ingrediants as $ingrediant) {
            $ingrediant->images = $ingrediant->images; // S'assurer que les images sont chargées
        }
        return view('admin.Ingrediants', compact('ingrediants'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'ingrediant_file' => 'file|image|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $ingrediant = $this->ingrediantRepo->create($request->only(['name']));


        $path = $request->file('ingrediant_file')->store('ingrediant', 'public');
        $ingrediant->images()->create([
            'url' => $path
        ]);


        return redirect()->back()->with('success', 'Ingrediant added successfully!');
    }




    public function update(Request $request, Ingrediant $ingrediant)
{
    // Step 1: Validate the incoming request
    $validated = $request->validate([
        'name' => 'required|string|max:255',  // Validate that 'name' is required and is a string of max length 255
        'theme_file' => 'nullable|file|image|max:2048',  // 'theme_file' must be a file, specifically an image, and optionally present, with a max size
    ]);

    // Step 2: Update the theme's name
     $ingrediant->name = $validated['name'];

    // Step 3: Check if a new file has been uploaded
    if ($request->hasFile('theme_file')) {
        // Store the file in the 'public/themes' directory within the public disk and get the path
        $path = $request->file('theme_file')->store('ingrediant', 'public');

        // Update the image_url attribute with the new file path
         $ingrediant->image_url = $path;
    }

    // Step 4: Save the changes to the database
     $ingrediant->save();

    // Step 5: Redirect to a given route with a success message
    return redirect()->back()->with('success', 'Ingrediant updated successfully!');
}


    public function destroy($id)
{
    if ($this->ingrediantRepo->delete($id)) {
        return redirect()->back()->with('success', 'Ingrediant  deleted successfully.');
        
    } else {
        return back()->withErrors('Unable to delete Ingrediant .');
    }
}
}
