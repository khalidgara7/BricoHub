<?php

namespace App\Http\Requests\Services;

use Illuminate\Foundation\Http\FormRequest;

class ServiceStoreRequest extends FormRequest
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
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric|min:0',
            'years_of_experience' => 'required|numeric|min:0|max:20',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ];
    }

    public function messages(){
        return [
            'title.required' => 'Title is required',
            'description.required' => 'Description is required',
            'category_id.required' => 'Category is required',
            'price.required' => 'Price is required',
            'years_of_experience.required' => 'Years of experience is required',
            'image.required' => 'Image is required',
            'price.numeric' => 'Price must be a number',
            'years_of_experience.numeric' => 'Years of experience must be a number',
            'years_of_experience.max' => 'Years of experience must be less than 20',
            'image.image' => 'Image must be an image',
            'image.mimes' => 'Image must be a file of type: jpeg, png, jpg, gif',
    
        ];
    }
}
