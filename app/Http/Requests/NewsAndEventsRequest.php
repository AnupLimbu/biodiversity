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
            'title'=>'required|string|max:255|unique:news_and_events,title,'.$this->news_and_event,
            'description'=>'nullable|string',
            'type'=>['required',Rule::in('news','event')],
        ];
        if($this->type=='event')
        {
            $rules['event_start_date']='required|date';
            $rules['event_end_date']='required|date|after_or_equal:event_start_date';
        }

        if($this->news_and_event)
        {
            $rules['banner_img']='nullable|file|mimes:jpg,jpeg,png|max:5120';
            $rules['file']='nullable|file|mimes:pdf,docx|max:5120';
        }else{
            $rules['banner_img']='required|file|mimes:jpg,jpeg,png|max:5120';
            $rules['file']='required|file|mimes:pdf,docx|max:5120';
        }
        return $rules;
    }
}
