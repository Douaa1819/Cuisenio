<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use App\trait\season;
use App\Models\Ingrediant;
use App\Models\Recipe;
use App\Models\Theme;
use App\Repositories\IngrediantRepositoryInterface;
use App\Repositories\RecipeRepositoryInterface;
use App\Repositories\ThemeRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class HomeController extends Controller

{
    use season;
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
        $allRecipes = Recipe::latest()->take(6)->get();
        $featuredRecipes=Recipe::withCount('favoris')
        ->orderByDesc('favoris_count')
        ->take(3)
        ->get();

        $firstThreeRecipes = $allRecipes->take(3);
        $nextThreeRecipes = $allRecipes->slice(3, 3);
        $season = $this->GetSeason();
        $recipeseason=Recipe::where('season',$season)->limit(3)->get();
        return view('visitor.index', compact('themes', 'recipeseason','ingrediant', 'firstThreeRecipes', 'nextThreeRecipes','featuredRecipes'));
    }


    public function contact()
    {
        return view('visitor.ContactUs');
    }

    public function about()
    {
        return view('visitor.aboutUs');
    }

    public function see()
    {
        $this->themes = Theme::query();
        $themes = Theme::paginate(6);
        $this->ingrediant = Theme::query();
        $ingrediant = Ingrediant::paginate(6);
        $this->recipes = Recipe::query();
        $recipes = Recipe::paginate(3);


        $allRecipes = Recipe::latest()->take(6)->get();
        // $topRatedRecipes = Recipe::withCount('reviews')
        // ->withAvg('reviews', 'nbr_stars')
        // ->orderByDesc('reviews_avg_nbr_stars')
        // ->take(3)
        // ->get();
        $featuredRecipes=Recipe::withCount('favoris')
             ->orderByDesc('favoris_count')
             ->take(3)
             ->get();
        $firstThreeRecipes = $allRecipes->take(3);
        $nextThreeRecipes = $allRecipes->slice(3, 3);
        $season = $this->GetSeason();
        $recipeseason = Recipe::where('season', $season)->limit(3)->get();
        return view('user.index', compact('themes', 'ingrediant', 'recipes', 'recipeseason', 'firstThreeRecipes', 'nextThreeRecipes','featuredRecipes'));
    }
    public function blog()
    {

        return view('visitor.blog');
    }
    public function urblog()
    {

        return view('user.blog');
    }
    public function more()
    {

        return view('user.readMore');
    }
    public function profile()
    {

        return view('user.profile');
    }


    public function updateProfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'profile_image' => 'sometimes|image|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['code' => 400, 'msg' => $validator->errors()->first()]);
        }

        $user = Auth::user();
        if (!$user instanceof User) {
            return response()->json(['error' => 'Not a valid user instance']);
        }

        $user->name = $request->name;

        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $path;
        }

        $user->save();
        return response()->json(['code' => 200, 'msg' => 'Profile updated successfully.']);
    }


    public function password(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $request->user()->update([
            'password' => Hash::make($request->password),
        ]);
        return response()->json(['success' => 'password updated with success'], 200);
    }
}
