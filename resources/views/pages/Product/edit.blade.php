@extends('layouts.index')

@section('title', "Edit Barang $product->nama")
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Edit Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('product.update', $product->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nama" class="form-control-label">Nama Barang</label>
                    <input type="text" name="nama"
                        value="{{ old('nama') ? old('nama') : $product->nama }}"class="form-control @error('nama') is-invalid @enderror">
                    @error('nama')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kategori" class="form-control-label">Kategori Barang</label>
                    <select aria-label="Default select example" name="kategori"
                        value="{{ old('kategori') ? old('kategori') : $product->kategori }}"class="form-control @error('kategori') is-invalid @enderror">
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                        <option value="rokok">Rokok</option>
                        <option value="perlengkapan mandi">Perlengkapan Mandi</option>
                        <option value="lain-lain">Lain-Lain</option>
                    </select>
                    @error('kategori')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="form-control-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') ? old('deskripsi') : $product->deskripsi }}</textarea>
                    @error('deskripsi')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga_terbaru" class="form-control-label">Harga Terbaru</label>
                    <input type="number" name="harga_terbaru"
                        value="{{ old('harga_terbaru') ? old('harga_terbaru') : $product->harga_terbaru }}"class="form-control @error('harga_terbaru') is-invalid @enderror">
                    @error('harga_terbaru')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga_jual" class="form-control-label">Harga Jual</label>
                    <input type="number" name="harga_jual"
                        value="{{ old('harga_jual') ? old('harga_jual') : $product->harga_jual }}"class="form-control @error('harga_jual') is-invalid @enderror">
                    @error('harga_jual')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="stok" class="form-control-label">Stok</label>
                    <input type="number" name="stok"
                        value="{{ old('stok') ? old('stok') : $product->stok }}"class="form-control @error('stok') is-invalid @enderror">
                    @error('stok')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="isi_per_dus" class="form-control-label">Isi per Dus/Box</label>
                    <input type="number" name="isi_per_dus"
                        value="{{ old('isi_per_dus') ? old('isi_per_dus') : $product->isi_per_dus }}"class="form-control @error('isi_per_dus') is-invalid @enderror">
                    @error('isi_per_dus')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-block" type="submit">Edit Barang</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('after-script')
    <script>
        ClassicEditor
            .create(document.querySelector('#deskripsi'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
