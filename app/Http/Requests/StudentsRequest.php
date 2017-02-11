<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|alpha',
            'surname' => 'required|alpha',
            'middle_name' => 'nullable|alpha',
            'date_of_birth' => 'nullable|date_format:d-m-Y',
            'nationality' => 'nullable|alpha',
            'home_town' => 'nullable|alpha',
            'current_address' => 'nullable|string',
            'primary_school' => 'nullable|string',
            'high_school' => 'nullable|string',
            'college' => 'nullable|string',
            'photo' => 'nullable'

        ];
    }
}
