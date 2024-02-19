<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookFormRequest extends FormRequest
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

            'nome' => 'required|string|min:2|max:50',
            'genere' => 'required|string|min:2|max:10',
            'autore' => 'required|string',
            'scaffale' => 'required|numeric',
        ];

    }
    public function messages() {

        return [
            'nome.min' => "Il nome non puo' essere minore di 2 caratteri",
            'nome.string' => "Il nome deve essere una stringa",
            'nome.max' => "Il nome non puo' essere maggiore di 50 caratteri",
            'genere.min' => "Il genere non puo' essere minore di 2 caratteri",
            'genere.string' => "Il genere deve essere una stringa",
            'genere.max' => "Il genere non puo' essere maggiore di 10 caratteri",
            'autore.string' => "l'autore deve essere una stringa",
            'scaffale.numeric' => "lo scaffale deve essere un numero"

        ];
    }
}
