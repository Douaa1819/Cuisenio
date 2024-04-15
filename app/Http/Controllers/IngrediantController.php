<?php

namespace App\Http\Controllers;

use App\Models\Ingrediant;
use Illuminate\Support\Facades\Validator;
use App\Repositories\IngrediantRepositoryInterface;
use Illuminate\Http\Request;

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
            $ingrediant->images = $ingrediant->images;
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
    $validated = $request->validate([
        'name' => 'required|string|max:255',  
        'theme_file' => 'nullable|file|image|max:2048',
    ]);

    
     $ingrediant->name = $validated['name'];

   
    if ($request->hasFile('theme_file')) {
      
        $path = $request->file('theme_file')->store('ingrediant', 'public');

       
         $ingrediant->image_url = $path;
    }

   
     $ingrediant->save();
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
