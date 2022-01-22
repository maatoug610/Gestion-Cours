<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnseignantRequest extends FormRequest
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
            'code'=>['bail','required','integer'],
            'grade'=>['bail','required','string'],
            'mail'=>['bail','required','string'],
            'nom'=>['bail','required','string'],
            'prenom'=>['bail','required','string'],
            'N_bureau'=>['bail','required','integer'],
            'tel'=>['bail','required','string'],
        ];
    }
}
