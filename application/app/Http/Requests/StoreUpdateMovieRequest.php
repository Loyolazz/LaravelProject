<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateMovieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Defina como true se desejar autorizar o acesso a esta solicitação
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $imageBaseUrl = 'https://flxt.tmsimg.com/assets/';

        $rules = [
            'name' => ['required', 'max:255'],
            'genre' => ['required', 'max:255'],
            'codMovieIMDb' => ['required', 'max:255'],
            'rottenTomatoesMeter' => ['required', 'max:255'],
            'Director' => ['required', 'max:255'],
            'Poster' => ['required', 'url', 'max:255', "starts_with:{$imageBaseUrl}"] // Exemplo: validar se é uma URL válida
            // Adicione outras regras de validação para campos adicionais aqui
        ];

        // Se for uma ação de atualização (PATCH), exclua a regra de campo único para codMovieIMDb
        if ($this->isMethod('patch')) {
            $rules['Poster'] = ['nullable', 'url', 'max:255', "starts_with:{$imageBaseUrl}"];
            $rules['codMovieIMDb'] = ['required', 'max:255'];
        } else {
            $rules['codMovieIMDb'][] = 'unique:movies';
        }

        return $rules;
    }
}
