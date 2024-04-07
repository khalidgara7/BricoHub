<?php

namespace App\Http\Requests\Services;

use Illuminate\Foundation\Http\FormRequest;

class ServiceUpdateRequest extends FormRequest
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
            'title' => 'string|max:255',
            'description' => 'string',
            'category_id' => 'exists:categories,id',
            'price' => 'numeric|min:0',
            'years_of_experience' => 'numeric|min:0|max:20',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ];
    }

    public function message(){
        return [
            'title.string' => 'Title must be a string',
            'description.string' => 'Description must be a string',
            'category_id.exists' => 'Category does not exist',
            'price.numeric' => 'Price must be a number',
            'years_of_experience.numeric' => 'Years of experience must be a number',
            'years_of_experience.max' => 'Years of experience must be less than 20',
            'image.image' => 'Image must be an image',
            'image.mimes' => 'Image must be a file of type: jpeg, png, jpg, gif',

        ];
    }
}
