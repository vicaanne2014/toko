@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Daftar Satuan</div>

                <div class="card-body">
                    @foreach($units as $unit)
                        <div class="media">
                            <div class="media-body">
                                {{ $unit->unit }}
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
