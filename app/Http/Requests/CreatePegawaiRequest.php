<?php
/**
 * Created by PhpStorm.
 * User: V3-471G
 * Date: 8/18/2016
 * Time: 1:16 PM
 */

namespace App\Http\Requests;

class CreatePegawaiRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return ['nama' => 'required',
                'email' => 'required|email',
                'level' => 'required|numeric'];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Kolom nama harus diisi',
            'email.required' => 'Kolom nama belum diisi',
            'email.email' => 'Email tidak sesuai',
            'level.required' => 'Level pegawai belum dipilih',
            'level.numeric' => 'Level pegawai tidak sesuai',
        ];
    }
}