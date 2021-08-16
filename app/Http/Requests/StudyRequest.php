<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudyRequest extends FormRequest
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
            'start_date'=>'required',
            'end_date'=>'required',
            'reading'=>'nullable',
            'vocabulary'=>'nullable',
            'grammary'=>'nullable',
            'verbs'=>'nullable',
            'math'=>'nullable',
            'english'=>'nullable',
            'oral'=>'nullable',
            'history'=>'nullable',
            'science'=>'nullable',
            'autre'=>'nullable',
            'week'=>'required',
            'publish'=>'required'
        ];
    }
}
