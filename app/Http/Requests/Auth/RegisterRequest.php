<?php

namespace App\Http\Requests\Auth;

use Illuminate\Contracts\Validation\Validator;
//use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class RegisterRequest extends Request
{

    public function authorize() {
        return true;
    }
//    /**
//     * Handle a failed validation attempt.
//     *
//     * @param  \Illuminate\Contracts\Validation\Validator $validator
//     * @return void
//     *
//     * @throws \Illuminate\Validation\ValidationException
//     */
//    protected function failedValidation(Validator $validator)
//    {
//        throw new ValidationException($validator, response()->json(
//            ['errors' => $this->formatErrors($validator), 'code' => 400], 200
//        ));
//    }
//
//    /**
//     * Format the errors from the given Validator instance.
//     *
//     * @param  \Illuminate\Contracts\Validation\Validator $validator
//     * @return array
//     */
//    protected function formatErrors(Validator $validator): array
//    {
//        return $validator->errors()->all();
//    }
}
