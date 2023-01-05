@extends('layouts.navbar')

@section('content')
    <div class="d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 me-3">Edit Data Kriteria</h1>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('kriterias.update', $kriteria->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row g-3 mb-2 align-items-center">
            <div class="col-2">
                <label for="inputNama" class="col-form-label">Nama</label>
            </div>
            <div class="col-auto">
                <input type="text" name="nama" value="{{ $kriteria->nama }}" id="inputNama" class="form-control"
                    aria-describedby="NamaHelpInline">
            </div>
        </div>
        <div class="row g-3 mb-2 align-items-center">
            <div class="col-2">
                <label for="inputPrioritas" class="col-form-label">Prioritas</label>
            </div>
            <div class="col-auto">
                <div class="form-outline" style="width: 22rem;">
                    <input min="1" max="20" type="number" value="{{ $kriteria->prioritas }}"
                        id="inputPrioritas" class="form-control" aria-describedby="PrioritasHelpInline" />
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

@push('css')
    <style>
        label {
            font-weight: bold;
        }
    </style>
@endpush
