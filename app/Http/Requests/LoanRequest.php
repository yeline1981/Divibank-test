<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoanRequest extends FormRequest
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
            //
            'requested_amount' => 'required|number',
            'client_id' => 'required|number'
        ];
    }

    public function messages()
    {
        return [
            'requested_amount.required' => 'A amount is required',
            'client_id.required' => 'A client is required',
        ];
    }
}
