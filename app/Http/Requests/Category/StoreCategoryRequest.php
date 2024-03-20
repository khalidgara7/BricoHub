<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            "name" => "required|max:255",
            "description" => "required|max:500",
            "image" => 'required|image|mimes:jpeg,png,jpg,gif',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Le champ nom est requis.',
            'description.required' => 'Le champ description est requis.',
            'image.required' => 'Le champ image est requis.',
            'image.image' => 'Le fichier doit être une image.',
            'image.mimes' => 'Le fichier doit être de type png, jpg, jpeg, gif ou svg.',
        ];
    }

}
