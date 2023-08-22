<?php

namespace App\Http\Requests\Auth;

use App\Helpers\ResponseHttp;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class AuthenticateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "email" => "required|email|max:255",
            "password" => "required|string"
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            ResponseHttp::responseError('Error form: '.$validator->errors(), 422)
        );
    }
}
