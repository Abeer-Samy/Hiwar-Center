<?php

namespace App\Http\Requests\study;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'origititle'=>'required|max:100' ,
            'title'=>'required|max:100',
            'content_brief'=>'required',
            'imge'=>'required|image', 
            'publish_house'=>'required',
            'year_publication'=>'required',
            'section_id'=>'required',
            'specialization_id'=>'required',
            'study_type_id'=>'required',
            'pdf'=>'required'
               ];
    }
}
