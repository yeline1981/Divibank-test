<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name' => 'required|string',
            'birthday' => 'required|date'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A name is required',
            'birthday.required' => 'A birthday is required',
        ];
    }
}
