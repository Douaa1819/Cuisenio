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
            'ingredients.*' => 'exists:ingrediants,id',
            'steps' => 'required|string',
            'level' => 'required|in:easy,average,advanced',
            'season' => 'required|in:winter,spring,summer,autumn'
        ];
    }
}
