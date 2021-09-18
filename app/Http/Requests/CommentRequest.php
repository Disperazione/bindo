<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            "name" => "required|min:5",
            "email"=>"required|email",
            "comment" => "required",
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "Nama tidak boleh kosong",
            "name.min" => "Nama harus lebih dari 5 character",
            "email.requred" => "Email tidak boleh kosong",
            "email.email" => "Email harus berformat email",
            "comment.required" => "Comment tidak boleh koosng"
        ];
    }
}
