<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostContact extends FormRequest
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
            'email' => 'required|email:rfc,dns',
            'name' => 'required',
            'msg_subject' => 'required',
            'message' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email is required.',
            'name.required' => 'Name is required.',
            'msg_subject.required' => 'Subject is required.',
            'message' => 'Message is required.'
        ];
    }
}
