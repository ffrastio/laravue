@extends('layouts.index')

@section('title', 'Tambah Barang')
@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('product.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama" class="form-control-label">Nama Barang</label>
                    <input type="text" name="nama"
                        value="{{ old('nama') }}"class="form-control @error('nama') is-invalid @enderror">
                    @error('nama')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kategori" class="form-control-label">Kategori Barang</label>
                    <select aria-label="Default select example" name="kategori"
                        value="{{ old('kategori') }}"class="form-control @error('kategori') is-invalid @enderror">
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
                    <textarea name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga_modal" class="form-control-label">Harga Modal</label>
                    <input type="number" name="harga_modal"
                        value="{{ old('harga_modal') }}"class="form-control @error('harga_modal') is-invalid @enderror">
                    @error('harga_modal')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga_jual" class="form-control-label">Harga Jual</label>
                    <input type="number" name="harga_jual"
                        value="{{ old('harga_jual') }}"class="form-control @error('harga_jual') is-invalid @enderror">
                    @error('harga_jual')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="stok" class="form-control-label">Stok</label>
                    <input type="number" name="stok"
                        value="{{ old('stok') }}"class="form-control @error('stok') is-invalid @enderror">
                    @error('stok')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="isi_per_dus" class="form-control-label">Isi per Dus/Box</label>
                    <input type="number" name="isi_per_dus"
                        value="{{ old('isi_per_dus') }}"class="form-control @error('isi_per_dus') is-invalid @enderror">
                    @error('isi_per_dus')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-block" type="submit">Tambah Barang</button>
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
