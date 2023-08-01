@extends('dashboard.layouts.main')

@section('container')
    
    <a href="/dashboard/menu" class="btn btn-success mt-5"><span data-feather="arrow-left"></span> Kembali</a>

    <div class="mt-4">
        <img src="{{ url('storage/'.$menu->image) }}"
        style="width: 50%;">
    </div>
@endsection