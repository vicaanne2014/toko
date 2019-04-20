@extends('layouts.app')

@section('content')
<div class="container">
    <div class="mb-1">
        @include('layouts._message')
    </div>
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
                                    <a href="{{ route('units.edit', $unit->id) }}" class="btn btn-sm btn-outline-success">Ubah</a>
                                    <form class="form-delete" action="{{ route('units.destroy', $unit->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Anda yakin ingin menghapus Satuan {{$unit->unit}}')" type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                                    </form>
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
