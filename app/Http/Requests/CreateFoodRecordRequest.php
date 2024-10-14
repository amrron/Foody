<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateFoodRecordRequest extends FormRequest
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
            'nama' => 'required|string|max:32',
            'karbohidrat' => 'required|numeric',
            'protein' => 'required|numeric',
            'lemak' => 'required|numeric',
            'gula' => 'required|numeric',
            'garam' => 'required|numeric',
            'jumlah' => 'required|numeric',
            'waktu' => 'required'
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
