<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginVaidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email'=> 'required',
            // 'name'=>'required|string|max:50',
            'password'=>'required',
        ];
    }
   public function messages(){
         return [
            'email.required' => 'Email is required!',
       
            'password.required' => 'Password is required!'
        ];
    }
}
