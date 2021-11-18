@extends('admin')

@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Data Buku</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <a href="{{ route('buku.create') }}" class="btn btn-sm btn-primary float-right">Tambah
                            Buku</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Supplier</th>
                                    <th>Judul Buku</th>
                                    <th>Jenis Buku</th>
                                    <th>Cover Buku</th>
                                    <th>Stok</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($buku as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->supplier->nama_supplier }}</td>
                                        <td>{{ $data->title }}</td>
                                        <td>{{ $data->jenis }}</td>
                                        <td><img src="{{ $data->image() }}" alt="" style="width:150px; height:150px;"
                                                alt="Cover"></td>
                                        <td>{{ $data->stok }}</td>
                                        <td>{{ $data->harga }}</td>


                                        <td>
                                            <form action="{{ route('buku.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('buku.edit', $data->id) }}"
                                                    class="btn btn-info">Edit</a>
                                                <a href="{{ route('buku.show', $data->id) }}"
                                                    class="btn btn-warning">Show</a>
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
