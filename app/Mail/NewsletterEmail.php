<?php

namespace App\Mail;

use App\Models\Recipe;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterEmail extends Mailable
{
    use Queueable, SerializesModels;



    public $recipe; 

    public function __construct($recipe) 
    {
        $recipe = Recipe::find($recipe);
        $this->recipe = $recipe; 
    }

    public function build()
    {
        return $this->view('emails.newsletter')
                    ->with([
                        'recipeTitle' => $this->recipe->title,
                        'recipeDescription' => $this->recipe->description
                    ]);
    }
}
