<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AwardsRequest extends FormRequest
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
            'student_id' => 'required|numeric',
            'award_description_short' => 'required|string',
            'award_description' => 'required|string',
            'issued_by' => 'required|string',
            'award_date' => 'required|nullable|date_format:d-m-Y'
        ];
    }
}
