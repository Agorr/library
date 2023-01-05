<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorFormRequest extends FormRequest
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
            'name' => 'required',
            'sex' => 'required',
            'birth_date' => 'required',
            'nationality' => 'required',
            'surname' => 'required'
            ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'name' => strip_tags($this->name),
            'sex' => strip_tags($this->sex),
            'birth_date' => strip_tags($this->birth_date),
            'nationality' => strip_tags($this->nationality),
            'surname' => strip_tags($this->surname),
        ]);
    }
}
