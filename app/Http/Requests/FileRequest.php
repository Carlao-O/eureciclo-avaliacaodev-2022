<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileRequest extends FormRequest
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
            //
            'file' => 'required|mimes:txt'
        ];
    }
    
    public function messages()
    {
        return [
            'file.required' => 'Você precisa informar um arquivo para importação.',
            'file.mimes' => 'Formato de arquivo inválido. O arquivo deve ser do tipo TXT.'
        ];
    }
}
