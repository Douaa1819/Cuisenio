<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;

use App\Models\Ingrediant;
use App\Models\Recipe;
use App\Models\Theme;
use App\Repositories\IngrediantRepositoryInterface;
use App\Repositories\RecipeRepositoryInterface;
use App\Repositories\ThemeRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $recipes;
    protected $themes;
    protected $ingrediant;

    public function __construct(RecipeRepositoryInterface $recipes, ThemeRepositoryInterface $themes, IngrediantRepositoryInterface $ingrediant)
    {

        $this->themes = $themes;
        $this->recipes = $recipes;
        $this->ingrediant = $ingrediant;
    }
    public function index()
    {
        $this->themes = Theme::query();
        $themes = Theme::paginate(6);
        $this->ingrediant = Theme::query();
        $ingrediant = Ingrediant::paginate(6);
    return view('visitor.index', compact('themes', 'ingrediant'));
    }
    public function contact()
    {
    return view('visitor.ContactUs');
    }

    public function about(){
        return view('visitor.aboutUs');

    }

    public function see(){
        $this->themes = Theme::query();
        $themes = Theme::paginate(6);
        $this->ingrediant = Theme::query();
        $ingrediant = Ingrediant::paginate(6);
        $this->recipes = Recipe::query();
        $recipes = Recipe::paginate(3);
        return view('user.index', compact('themes', 'ingrediant','recipes'));
    }
    public function blog(){

        return view('visitor.blog');
    }
    public function urblog(){

        return view('user.blog');
    }
    public function more(){

        return view('user.readMore');
    }
    public function profile(){

        return view('user.profile');
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
