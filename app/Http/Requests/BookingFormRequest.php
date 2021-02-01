<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingFormRequest extends FormRequest
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
            'guest_full_name' => 'bail|required|alpha|min:6',
            'guest_credit_card' => 'bail|required|string|size:16',
            'room' => 'bail|required|numeric',
            'from_date' => 'bail|required',
            'to_date' => 'bail|required',
            'more_details' => 'bail|required|between:5,180',
        ];
    }
}
