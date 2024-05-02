<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'theme_id'=> 'required|exists:themes,id',
            'list_ingredients' => 'required',
            'image' => 'sometimes|file|image|max:2048|mimes:jpeg,png,jpg,gif,svg,webp',
            'duration_preparation'=>'required|int',
            'number_of_persons'=>'required|int',
            'ingredients.*' => 'exists:ingrediants,id',
            'steps' => 'required|string',
            'level' => 'required|in:biginner,intermediate,advanced,expert',
            'season' => 'required|in:winter,spring,summer,autumn,all season'
        ];
    }
}
