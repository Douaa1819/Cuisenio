<?php

namespace App\Http\Controllers\recipes;

use App\Http\Controllers\Controller;
use App\Models\Ingrediant;
use Illuminate\Support\Facades\Validator;
use App\Repositories\IngrediantRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IngrediantController extends Controller
{


    protected $ingrediantRepo;

    public function __construct(IngrediantRepositoryInterface $ingrediantRepo)
    {
        $this->ingrediantRepo = $ingrediantRepo;
    }

    public function creat()
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


        if ($request->hasFile('ingrediant_file')) {
            $path = $request->file('ingrediant_file')->store('ingrediants', 'public');
            $ingrediant->image()->create([
                'url' => $path
            ]);
        }
        return redirect()->back()->with('success', 'Ingrediant added successfully!');
    }




    public function update(Request $request, Ingrediant $ingrediant)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',  
        'ingrediant_file' => 'nullable|file|image|max:2048',
    ]);

    
     $ingrediant->name = $validated['name'];

   
     if ($request->hasFile('ingrediant_file')) {
        $oldImage = $ingrediant->image;
        if ($oldImage) {
            Storage::delete($oldImage->url); 
            $oldImage->delete(); 
        }

        $path = $request->file('ingrediant_file')->store('ingrediants', 'public');
        $ingrediant->image()->create(['url' => $path]); 
    }
    $ingrediant->update();
    

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
