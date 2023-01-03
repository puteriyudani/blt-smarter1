@extends('layouts.navbar')

@section('content')
    <div class="d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 me-3">Edit Data Masyarakat</h1>
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

    <form action="{{ route('masyarakats.update', $masyarakat->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row g-3 mb-2 align-items-center">
            <div class="form-group">
                <div class="col-2">
                    <label for="inputNIK" class="col-form-label">NIK</label>
                </div>
                <div class="col-auto">
                    <input type="text" name="NIK" value="{{ $masyarakat->NIK }}" id="inputNIK" class="form-control"
                        aria-describedby="NIKHelpInline">
                </div>
            </div>
        </div>
        <div class="row g-3 mb-2 align-items-center">
            <div class="col-2">
                <label for="inputNama" class="col-form-label">Nama</label>
            </div>
            <div class="col-auto">
                <input type="text" name="nama" value="{{ $masyarakat->nama }}" id="inputNama" class="form-control"
                    aria-describedby="NamaHelpInline">
            </div>
        </div>
        <div class="row g-3 mb-2 align-items-center">
            <div class="col-2">
                <label for="inputJenisKelamin" class="col-form-label">Jenis Kelamin</label>
            </div>
            <div class="col-auto">
                <label><input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if ($masyarakat['jenis_kelamin'] == 'Laki-laki') {
                    echo 'checked';
                } ?>>Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php if ($masyarakat['jenis_kelamin'] == 'Perempuan') {
                    echo 'checked';
                } ?>>Perempuan</label>
                {{-- <input type="text" name="jenis_kelamin" value="{{ $masyarakat->jenis_kelamin }}" id="inputJenisKelamin" class="form-control" aria-describedby="JenisKelaminHelpInline"> --}}
            </div>
        </div>
        <div class="row g-3 mb-2 align-items-center">
            <div class="col-2">
                <label for="inputAlamat" class="col-form-label">Alamat</label>
            </div>
            <div class="col-auto">
                <input type="text" name="alamat" value="{{ $masyarakat->alamat }}" id="inputAlamat" class="form-control"
                    aria-describedby="AlamatHelpInline">
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
