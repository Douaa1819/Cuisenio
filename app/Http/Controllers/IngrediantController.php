<?php

namespace App\Http\Controllers;

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



    public function destroy($id)
{
    if ($this->ingrediantRepo->delete($id)) {
        return redirect()->back()->with('success', 'Ingrediant  deleted successfully.');
        
    } else {
        return back()->withErrors('Unable to delete Ingrediant .');
    }
}
}
