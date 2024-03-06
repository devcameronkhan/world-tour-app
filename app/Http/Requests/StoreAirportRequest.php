<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAirportRequest extends FormRequest
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
            'code' => 'required|unique:airports,code',
            'name'=>'required',
            'city_code'=>'required',
            'city' => 'required',
            'timezone' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'code.unique' => 'Airport Code is Already Taken. Please Try Another',
        ];
    }
}
