<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtudiantRequest extends FormRequest
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
            'cin'=>['bail','required','integer'],
            'adresse'=>['bail','required','string'],
            'id_diplome'=>['bail','required','integer'],
            'mail'=>['bail','required','string'],
            'nom'=>['bail','required','string'],
            'prenom'=>['bail','required','string'],
            'tel'=>['bail','required','string'],
        ];
    }
}
