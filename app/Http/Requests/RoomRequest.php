<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RoomRequest extends Request
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
            'number' => 'required',
            'floor' => 'required',
            'num_beds' => 'required',
            'floor_area' => 'required',
            'balcony' => 'required',
            'air_conditioning' => 'required',
            'bathroom' => 'required',
            'minibar' => 'required',
            'smoking' => 'required',
        ];
    }
}
