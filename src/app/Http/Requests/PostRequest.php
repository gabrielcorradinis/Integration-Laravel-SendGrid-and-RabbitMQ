<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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

    protected function prepareForValidation()
    {
        $input = [];

        if ($this->filled('emailDestinatario')) {
            $input['emailDestinatario'] = array_unique(explode(',', $this->emailDestinatario));
        }

        $this->merge($input);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'titulo' => 'required',
            'emailRemetente' => 'required|email',
            'emailDestinatario' => 'required',
            'emailDestinatario.*' => 'email',
            'conteudo' => 'required'
        ];
    }

    protected function passedValidation()
    {
        $this->request->add(['emailDestinatario' => implode(',', $this->emailDestinatario)]);
    }
}
