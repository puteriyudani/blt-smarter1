@extends('layouts.navbar')

@section('content')
    @auth
        <div class="d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Beranda</h1>
        </div>
        <div class="mb-5">
            <a href="{{ route('masyarakats.index') }}" class="btn btn-primary btn-lg px-4 me-3">
                <h2>{{ $masyarakats }}</h2>
                <p>Data Masyarakat</p>
            </a>

            <a href="{{ route('kriterias.index') }}" class="btn btn-warning btn-lg px-4 me-3">
                <h2>{{ $kriterias }}</h2>
                <p>Data Kriteria</p>
            </a>

            <a href="#" class="btn btn-success btn-lg px-4">
                <h2>20</h2>
                <p>Data Penerima BLT</p>
            </a>
        </div>
    @endauth
@endsection

@push('css')
    <style>
        .btn {
            text-align: justify;
        }

        .btn h2 {
            font-weight: bold;
        }
    </style>
@endpush
