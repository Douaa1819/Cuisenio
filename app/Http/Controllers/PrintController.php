<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use  Barryvdh\DomPDF\Facade\Pdf as PDF;
use Dompdf\Dompdf;

class PrintController extends Controller
{
 
    // public function index()
    // {
    //     $recipes = Recipe::all();
    //     return view('user.readMore', compact('recipes'));
    // }

    // // Prépare la recette spécifique pour l'impression
    // public function printPreview($id)
    // {
    //     $recipe = Recipe::findOrFail($id);
    //     return view('print', compact('recipe'));
    // }


    public function downloadPDF($id)
    {
        $recipe = Recipe::findOrFail($id);

        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('print', compact('recipe'))->render());
        
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        return $dompdf->stream("recipe-$id.pdf", [
            "Attachment" => true
        ]);
    }
    

}
