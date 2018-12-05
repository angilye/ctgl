<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAcceuilAdminRequest extends FormRequest
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
            'contenu' => 'required',
            'id' => 'required'
//            'email' => 'required|email',
//            'motif' => [
//                'required',
//                'string',
//                Rule::notIn('default'),
//            ],
//            'msg' => 'required|min:5|string',
        ];
    }

    public function messages()
    {
        return [
//            'title.required' => 'A title is required',
//            'body.required'  => 'A message is required',
        ];
    }
}
