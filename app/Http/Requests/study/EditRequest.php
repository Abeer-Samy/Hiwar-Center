<?php

namespace App\Http\Requests\study;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            // 'original-title'=>'requiered|max:100' ,
            // 'title'=>'requiered|max:100',
            // 'content-brief'=>'requiered',
            // 'imge'=>'requiered|image', 
            // 'publish-house'=>'requiered',
            // 'year-publication'=>'requiered',
            // 'section_id'=>'requiered',
            // 'specialization_id'=>'requiered',
            // 'study_type_id'=>'requiered',
            // 'pdf'=>'requiered'
        ];
    }
}
