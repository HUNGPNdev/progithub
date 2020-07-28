<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTourRequest extends FormRequest
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
            'img'=>'image',
            'status'=>'required',
            'name'=>'unique:package_include,pac_name'
        ];
    }
    public function messages()
    {
        return [
            'status.required'=>'You must select status filed!',
            'name.unique'=>'Name have been existed!'
        ];
    }
}
