@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-item-center">
                        Daftar Satuan
                        <div class="ml-auto">
                            <a href="{{ route('units.create') }}" class="btn btn-sm btn-outline-primary">Tambah Satuan</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @foreach($units as $unit)
                        <div class="media">
                            <div class="media-body">
                                <div class="d-flex align-item-center row">
                                    <div class="col-6"><a href="{{ $unit->url }}">{{ $unit->unit }}</a></div>
                                    <div class="col-4">
                                        dibuat: <a href="{{ $unit->user->url }}">{{ $unit->user->name }}</a> {{$unit->created_date}}
                                    </div>
                                    <div class="ml-auto mr-3">
                                    <a href="{{ route('units.create') }}" class="btn btn-sm btn-outline-success">Ubah</a>
                                    <a href="{{ route('units.create') }}" class="btn btn-sm btn-outline-danger">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                    @endforeach

                    <div class="mx-auto">
                        {{ $units->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
