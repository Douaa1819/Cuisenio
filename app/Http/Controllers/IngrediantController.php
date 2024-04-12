<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Repositories\IngrediantRepositoryInterface; 
use Illuminate\Http\Request;

;

class IngrediantController extends Controller
{
    protected $ingrediantRepo;

    public function __construct(IngrediantRepositoryInterface $ingrediantRepo)
    {
        $this->ingrediantRepo = $ingrediantRepo;
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
            $path = $request->file('ingrediant_file')->store('public/ingrediant', 'public');
            // Ajout de l'image dans la table des images
            $ingrediant->images()->create([
                'url' => $path
            ]);
        }
    
        return redirect()->back()->with('success', 'Ingrediant added successfully!');
    }
}    