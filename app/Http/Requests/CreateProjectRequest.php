<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectRequest extends FormRequest
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
            'title'=>'required',
            'start_date'=>'required|date',
            'end_date'=>['nullable','required_if:status,completed','date'],
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status'=>'required|in:pending,completed,on-going,halted',
            'description'=>'required'
        ];
    }
}
