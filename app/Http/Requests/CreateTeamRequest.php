<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTeamRequest extends FormRequest
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
            'name'=>'required',
            'description'=>'nullable',
            't_type'=>'required|in:team,advisor,staff,volunteer,our-labs',
            'designation'=>'required',
            'contact'=>'nullable',
            'facebook_link'=>'nullable',
            'instagram_link'=>'nullable',
            'research_gate_link'=>'nullable',
            'google_scholar_link'=>'nullable',
            'linkedin_link'=>'nullable',
            'order'=>'required|integer|unique:teams,order,'.$this->id,
            'image'=>'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
