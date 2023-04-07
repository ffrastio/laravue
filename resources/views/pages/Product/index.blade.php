@extends('layouts.index')
@section('title', 'Data Barang')

@section('content')
    <style>
        table,
        tr,
        td {
            font-size: 12px !important;
        }
    </style>
    <div class="orders">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Daftar Barang</h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Barang</th>
                                        <th>Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Harga Jual</th>
                                        <th>Harga Modal</th>
                                        <th>Stok</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($product as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->kategori }}</td>
                                            <td>
                                                @if ($item->deskripsi != null)
                                                    {!! $item->deskripsi !!}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td> @rupiah($item->harga_jual) </td>
                                            <td> @rupiah($item->harga_terbaru / $item->isi_per_dus)</td>
                                            <td>{{ $item->stok }}</td>
                                            <td>
                                                {{-- <a href="{{route('product.gallery', $item->id)}}" class="btn btn-info btn-sm"> --}}
                                                <a href="#" class="btn btn-info btn-sm">
                                                    <i class="fa fa-picture-o"></i>
                                                </a>
                                                <a href="{{ route('product.edit', $item->id) }}"
                                                    class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form action="{{ route('product.destroy', $item->id) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Data barang belum ada</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
