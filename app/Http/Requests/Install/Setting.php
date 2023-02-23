<?php

namespace App\Http\Requests\Install;

use App\Abstracts\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class Setting extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company_name' => 'required',
            'user_email' => 'required|unique:users,email|email',
            'user_password' => ['required', 'confirmed', Password::min(8)],
        ];
    }
}
