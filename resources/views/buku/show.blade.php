@extends('admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Show Data Buku</h1>
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
                    <div class="card-header">Data Buku</div>
                    <div class="card-body">
                        <form action="{{ route('buku.update', $buku->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for=""> Judul Buku</label>
                                <input type="text" name="title" value="{{ $buku->title }}"
                                    class="form-control @error('title') is-invalid @enderror">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nama Supplier</label>
                                <select name="supplier_id" class="form-control @error('supplier_id') is-invalid @enderror">
                                    @foreach ($supplier as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $buku->supplier_id ? 'selected="selected"' : '' }}>
                                            {{ $data->nama_supplier }}</option>
                                    @endforeach
                                </select>
                                @error('supplier_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Buku</label>
                                <input type="text" name="jenis" value="{{ $buku->jenis }}"
                                    class="form-control @error('jenis') is-invalid @enderror">
                                @error('jenis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Stok</label>
                                <input type="number" name="stok" value="{{ $buku->stok }}"
                                    class="form-control @error('stok') is-invalid @enderror">
                                @error('stok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Cover Buku</label>
                                <br>
                                <img src="{{ $buku->image() }}" height="75" style="padding:10px;" />
                                <input type="file" name="cover" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="text" name="harga" value="{{ $buku->harga }}"
                                    class="form-control @error('harga') is-invalid @enderror">
                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <a href="{{ route('buku.index') }}" class="btn btn-block btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
