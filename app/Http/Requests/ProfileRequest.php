<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'nom_societe' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            "numtel" => ['required', 'numeric'],
            "numtel_societe" => ['required', 'numeric'],
            "adresse" => ['required', 'string', 'max:255'],
            "categorie_id" => ['required'],
        ];
    }
}
