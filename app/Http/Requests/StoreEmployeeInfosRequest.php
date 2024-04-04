<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeInfosRequest extends FormRequest
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
            'cin' => 'required|string|regex:/^[a-zA-Z]{2}[0-9]{6}$/',
            'age' => 'required|integer',
            'skill' => 'required|string',
            'ville' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'phone_number' => 'required|string|regex:/^[0-9]{10}$/', // Add this line
            'bio' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'cin.required' => 'The CIN field is required.',
            'cin.string' => 'The CIN must be a string.',
            'cin.regex' => 'The CIN format is invalid. It should start with 2 letters followed by 6 digits.',

            'age.required' => 'The Age field is required.',
            'age.integer' => 'The Age must be an integer.',

            'skill.required' => 'The Skill field is required.',
            'skill.string' => 'The Skill must be a string.',

            'ville.required' => 'The Ville field is required.',
            'ville.string' => 'The Ville must be a string.',

            'image.required' => 'The Image field is required.',
            'image.image' => 'The selected file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',

            'bio.required' => 'The Bio field is required.',
            'bio.string' => 'The Bio must be a string.',
        ];
    }

}
