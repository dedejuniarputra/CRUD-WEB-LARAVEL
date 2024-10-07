<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentsRequest extends FormRequest
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
            'txtid' => 'required|unique:students,idstudents|min:7|max:7',
            'txtfullname' => 'required',
            'txtgender' => 'required',
            'txtaddress' => 'required',
            'txtemail' => 'required|unique:students,email',
            'txtphone' => 'required|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'txtid.required' => ':attribute Tidak boleh kosong',
            'txtid.unique' => ':attribute Sudah ada didalam tabel',
            'txtfullname.required' => ':attribute Tidak boleh kosong',
        ];
    }

    public function attributes(): array
    {
        return [
            'txtid' => 'ID Students',
            'txtfullname' => 'Nama Lengkap',
        ];
    }
}
