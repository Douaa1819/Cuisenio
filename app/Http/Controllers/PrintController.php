<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class PrintController extends Controller
{

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
    
    public function printBooklist(Request $request)
    {
        $ids = json_decode($request->query('ids'), true);
        $recipes = Recipe::whereIn('id', $ids)->get(); 
        if ($recipes->isEmpty()) {
            abort(404, 'No recipes found.');
        }
        return view('print_recipes', compact('recipes'));

        
    }
    

    public function Booklist(Request $request)
    {
        $ids = json_decode($request->query('ids'), true);
        $recipes = Recipe::whereIn('id', $ids)->get(); 
        if ($recipes->isEmpty()) {
            return abort(404, 'No recipes found.');
        }

        $view = view('printBook', compact('recipes'))->render();
        $dompdf = new Dompdf();
        $dompdf->loadHtml($view);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        return $dompdf->stream('booklist.pdf', ['Attachment' => true]);
    }
    
    
    
}
