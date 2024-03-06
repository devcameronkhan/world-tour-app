<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFlightRequest extends FormRequest
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
            'airline_id' => 'required',
            'departure_airport_id' => 'required',
            'departure_time' => 'required',
            'arrival_time' => 'required',
            'arrival_airport_id' => 'required|different:departure_airport_id',
            'price' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'airline_id.required' => 'Please Select Airline !',
            'departure_airport_id.required' => 'Please Select Airport For Departure !',
            'arrival_airport_id.required' => 'Please Select Airport For Arrival !',
            'arrival_airport_id.different' => 'Arrival Airport Cannot be Same as Departure Airport !',
            'departure_time.required' => 'Please Select Time For Departure !',
            'arrival_time.required' => 'Please Select Time For Arrival !',
            'price.required' => 'Please Add A Flight Fare Price !',
        ];
    }
}
