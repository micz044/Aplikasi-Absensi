<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePositionRequest extends FormRequest
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
}
