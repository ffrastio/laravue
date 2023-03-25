<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            //
            'nama' => 'required|max:255',
            'kategori' => 'required|max:255',
            'deskripsi' => 'required',
            'harga_modal' => 'required|integer',
            'harga_jual' => 'required|integer',
            'harga_terbaru' => 'required|integer',
            'stok' => 'required|integer',
            'isi_per_dus' => 'required|integer',
        ];
    }

    public function message()
    {
        return [
            'nama.required' => 'kolom <b>Nama</b> wajib di isi !',
            'kategori.required' => 'kolom <b>Kategori</b> wajib di isi !',
            'deskripsi.required' => 'kolom <b>Deskripsi</b> wajib di isi !',
            'harga_modal.required' => 'kolom <b>Harga Modal</b> wajib di isi !',
            'harga_jual.required' => 'kolom <b>Harga Jual</b> wajib di isi !',
            'harga_terbaru.required' => 'kolom <b>Harga Jual</b> wajib di isi !',
            'stok.required' => 'kolom <b>Jual</b> wajib di isi !',
            'isi_per_dus.required' => 'kolom <b>Isi Per Dus</b> wajib di isi !',
        ];
    }
}
