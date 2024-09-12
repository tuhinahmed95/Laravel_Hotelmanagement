<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreadminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'one' =>'required',
            'two' =>'required',
            'three' =>'required',
            'four' =>'required',
            'five' =>'required',
            
        ];
    }
}
