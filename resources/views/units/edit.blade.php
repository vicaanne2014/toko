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
                    <form action="{{ route('units.update', $unit->id) }}" method="post">
                        @method('PATCH')
                        @include('units._form', ['buttonText' => 'Ubah Satuan'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
