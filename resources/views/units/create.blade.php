@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-item-center">
                        Buat Satuan
                        <div class="ml-auto">
                            <a href="{{ route('units.index') }}" class="btn btn-sm btn-outline-primary">Kembali ke Daftar Satuan</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('units.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="unit">Nama Satuan</label>
                            <input type="text" name="unit" class="form-control {{ $errors->has('unit')? 'is-invalid' : '' }}" value="{{ old('unit') }}" id="unit" placeholder="Tambah Satuan"/>
                            
                            @if($errors->has('unit'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('unit') }}</strong>
                                </div>
                            @endif
                            
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-md btn-outline-success">Tambah Satuan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
