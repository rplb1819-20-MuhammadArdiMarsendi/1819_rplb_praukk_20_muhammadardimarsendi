<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestTambahTransportasi extends FormRequest
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
            
            'type_transportasi_id'=>'required',
            'kode_transportasi'=>'required',
            'jumlah_kursi'=>'required|numeric',
            'keterangan'=>'required'
        ];
    }
}
