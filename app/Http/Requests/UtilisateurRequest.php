<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UtilisateurRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "mail" => "required|email|max:150",
            "mdp" => "required|min:6|"
        ];
    }

    public function messages(): array // fct qui permet de choisir le texte 
    {
        //nom du champs+ la règles correspondante
        return [
            "mail.required" => "Le mail doit être indiqué",
            "mdp.required" => "Le mot de passe doit être indiqué",
        ];
    }
}
