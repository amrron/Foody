<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:100|string',
            'email' => 'required|max:100|email|unique:users',
            'jenis_kelamin' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'aktivitas' => 'required',
            'password' => 'required|string|min:6',
            'tinggi_badan' => 'required|numeric',
            'berat_badan' => 'required|numeric'
        ];
    }

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response([
            'success' => false,
            'status' => 'error',
            'message' => 'Validasi error',
            'error' => $validator->getMessageBag()
        ], 400));
    }
}
