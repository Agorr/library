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
            'isbn' => 'required',
            'title' => 'required',
            'num_pages' => 'required|integer',
            'description' => 'required',
            'cover' => 'required'
            ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'isbn' => strip_tags($this->isbn),
            'title' => strip_tags($this->title),
            'num_pages' => strip_tags($this->num_pages),
            'description' => strip_tags($this->description),
            'cover' => strip_tags($this->cover),
        ]);
    }
}
