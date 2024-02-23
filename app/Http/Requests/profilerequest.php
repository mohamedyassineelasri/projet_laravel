<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class profilerequest extends FormRequest
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
            //
            'name' => 'required|between:3,20',//drr khase y3amar name //boolean//date/email/image/url/unique:nomtable
            'email' => 'required|email',//|unique:profiles
            'password' => 'required|min:5|max:20|confirmed', //confirmed===laravel mli kan3tilo hadi kaymxi kayxof li3ando name password_confirmation o kay tester
            'bio' => 'required',
            'image' => 'image|mimes:png,jpg,svg|max:10240',
        ];
    }
}
