@extends('admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Show Transaksi</h1>
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
                    <div class="card-header">Transaksi</div>
                    <div class="card-body">
                        <form action="{{ route('transaksi.update', $transaksi->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Nama Buku</label>
                                <select name="buku_id" class="form-control @error('buku_id') is-invalid @enderror">
                                    @foreach ($buku as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $transaksi->buku_id ? 'selected="selected"' : '' }}>
                                            {{ $data->title }}</option>
                                    @endforeach
                                </select>
                                @error('buku_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Buku</label>
                                <select name="buku_id" class="form-control @error('buku_id') is-invalid @enderror">
                                    @foreach ($buku as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $transaksi->buku_id ? 'selected="selected"' : '' }}>
                                            {{ $data->jenis }}</option>
                                    @endforeach
                                </select>
                                @error('buku_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah</label>
                                <input type="text" name="jumlah" value="{{ $transaksi->jumlah }}"
                                    class="form-control @error('jumlah') is-invalid @enderror">
                                @error('jumlah')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Total harga</label>
                                <input type="text" name="total_harga" value="{{ $transaksi->total_harga }}"
                                    class="form-control @error('total_harga') is-invalid @enderror">
                                @error('total_harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <a href="{{ route('transaksi.index') }}" class="btn btn-block btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
