<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NewsAndEventsRequest extends FormRequest
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
        $rules= [
            'title'=>'required|string|max:255',
            'description'=>'nullable|string|max:255',
            'news_and_event_body'=>'required',
            'type'=>['required',Rule::in('news','event')],
        ];
        if($this->news_and_event)
        {
            $rules['thumbnail']='nullable|file|mimes:jpg,jpeg,png|max:5120';
        }else{
            $rules['thumbnail']='required|file|mimes:jpg,jpeg,png|max:5120';
        }
        if($this->type=='event')
        {
            $rules['event_start_date']='required|date';
            $rules['event_end_date']='required|date|after_or_equal:event_start_date';
        }

        return $rules;
    }
}
