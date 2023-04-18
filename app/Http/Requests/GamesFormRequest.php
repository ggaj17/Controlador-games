<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GamesFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $anoAtual = date('Y');
        $metodo = $this->request->all()['_method'] ?? null;

        $rules = [
            'nome' => ['required', 'min:3', 'max:40'],
            'estilo' => ['required', 'min:3'],
            'desenvolvedora' => ['required', 'min:2'],
            'ano' => ['required', " numeric", 'min:0', 'max:'.$anoAtual]
        ];

        if($metodo == 'POST'){
            $rules['capa'] = ['required', "image", "mimes:png,jpg"];
        }

        return $rules;
    }
}
