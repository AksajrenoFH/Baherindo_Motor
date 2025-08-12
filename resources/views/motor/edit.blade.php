@extends('layouts.main')

@section('title', 'Edit - Baherindo Motor')

@section('content')
    <div class="container">
        <form action="{{ route('formMotor.update', $motor->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="namaMotor" class="form-label mb-3">Nama Motor</label><br>
            <input id="namaMotor" type="text" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="namaMotor" placeholder="Masukkan Nama Motor" value="{{ $motor->namaMotor }}"><br>
            <label for="hargaMotor" class="form-label mb-3">Harga Motor</label><br>
            <input id="hargaMotor" type="number" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="hargaMotor" placeholder="Masukkan Harga Motor" value="{{ $motor->hargaMotor }}"><br>
            <label for="tahunMotor" class="form-label mb-3">Tahun Motor</label><br>
            <input id="tahunMotor" type="number" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="tahunMotor" placeholder="Masukkan Tahun Motor" value="{{ $motor->tahunMotor }}"><br>
            <label for="kmMotor" class="form-label mb-3">KM Motor</label><br>
            <input id="kmMotor" type="number" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="kmMotor" placeholder="Masukkan KM Motor" value="{{ $motor->kmMotor }}"><br>
            <button type="submit" class="button bg-blue-500 text-white px-5 py-3 rounded-lg cursor-pointer">Edit Motor</button>
        </form>
    </div>
@endsection