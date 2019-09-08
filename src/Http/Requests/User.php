<?php

namespace JePaFe\Users\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class User extends FormRequest
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
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ];

        if ('PUT' == $this->method()) {
            $rules['email'] = 'required|string|email|max:255|unique:users,email,' . $this->id;
            $rules['password'] = 'nullable|string|min:8|confirmed';
        }

        return $rules;
    }
}
