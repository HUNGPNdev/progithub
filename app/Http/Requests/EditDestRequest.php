<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditDestRequest extends FormRequest
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
            
            'name'=>'unique:destination_tb,dest_name,'.$this->segment(4).',dest_id'
        ];
    }
}
