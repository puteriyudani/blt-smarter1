@extends('layouts.navbar')

@section('content')
    <div class="d-flex flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 me-3">Penilaian Masyarakat</h1>
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

    <form action="" method="POST">
        @csrf
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Nama Masyarakat</th>
                    @foreach ($kriterias as $kriteria => $value)
                        <th>{{ $value->nama }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @forelse ($masyarakats as $masyarakat => $valt)
                    <tr>
                        <td>{{ $valt->nama }}</td>
                        @if (count($valt->penilaian) > 0)
                        
                        @else
                            @foreach ($kriterias as $kriteria)
                                <td>
                                    <select name="subkriteria_id[]" class="form-control">
                                        @foreach ($kriteria->subkriterias as $k_1 => $v_1)
                                            <option value="{{ $v_1->id }}">
                                                {{ $v_1->nama }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            @endforeach
                        @endif
                    </tr>
                @empty
                    <tr>
                        <td>Tidak ada data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

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
