<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WaypointCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // https://laravel.com/docs/5.6/validation

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
            'name' => 'required|string|max:60',
            'description' => 'nullable|string',
            'address' => 'nullable|string|max:101',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
            'category_id' => 'required|exists:categories,id'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'The name of the waypoint is required',
            'latitude.between' => 'The latitude must be between -90 and 90 degrees',
            'longitude.between' => 'The latitude must be between -180 and 180 degrees',
            'category_id.required'  => 'The waypoint\'s category is required',
            'category_id.exists' => 'The waypoint\'s category must exist'
        ];
    }
}
