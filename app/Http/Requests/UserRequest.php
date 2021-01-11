<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            //'nid' => 'required',
            //'uid' => 'required',
            'notice'=>'required | min:3'
        ];
    }

    public function messages(){
        return [
            //'nid.required'=> "can't left empty....",
            //'uid.required'=> "can't left empty....",
            'notice.min'=> "must be at least 3 ch....",
            'notice.required'=> "can't left empty...."
        ];
    }
}