<?php

namespace App\Http\Controllers;

use App\Http\Requests\FavorisRequest;
use App\Models\favoris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavorisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FavorisRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        $favori = favoris::create($data);
        return response()->json(['favori' => $favori->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(favoris $favoris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(favoris $favoris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, favoris $favoris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(favoris $favori)
    {
        $favori->delete();
        $recipe = $favori->recipe->id;
        return response()->json(['recipe' => $recipe]);
    }
}
