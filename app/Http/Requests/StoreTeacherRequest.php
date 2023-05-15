<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeacherRequest extends FormRequest
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
            'position_id' => 'required',
            'name' => 'required',
            'nip' => 'required|unique:teachers,nip',
            'status' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'email' => 'required|unique:teachers,email|email:dns',
            'jabatan' => 'required'
        ];
    }

    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array<string, string>
 */
public function messages(): array
{
    return [
        'nip.unique' => 'NIP Sudah digunakan pegawai lain!!',
        'email.unique' => 'Email Tidak boleh sama dengan pegawai lain!!',
    ];
}
}
