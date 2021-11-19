@extends('admin')
@section('header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Show Data Supplier</h1>
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
                    <div class="card-header">Data Supplier</div>
                    <div class="card-body">
                        <form action="{{ route('supplier.update', $supplier->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for=""> Nama Supplier</label>
                                <input type="text" name="nama_supplier" value="{{ $supplier->nama_supplier }}"
                                    class="form-control @error('nama_supplier') is-invalid @enderror" disabled>
                                @error('nama_supplier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Alamat Supplier</label>
                                <input type="text" name="alamat" value="{{ $supplier->alamat }}"
                                    class="form-control @error('alamat') is-invalid @enderror" disabled>
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">

                                <a href="{{ route('supplier.index') }}" class="btn btn-block btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
