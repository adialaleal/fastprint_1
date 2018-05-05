<?php

namespace fastprint\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobsRequest extends FormRequest
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
            'inputNome' => 'required|max:100',
            'inputSetor' => 'required|max:4',
            'inputRamal' => 'required|max:4',
            'inputEmail3' => 'required|max:100',
            'inputFile' => 'required',
            'inputCopias' => 'required',
            'inputPapel' => 'required',
            'inputCor' => 'required',
            'inputAcabamento' => 'required',
            'inputObs' => 'required|max:280'
        ];
    }
}
