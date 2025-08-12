@extends('layouts.main')

@section('title', 'Form - Baherindo Motor')

@section('content')
    <div class="container">
        <form action="{{ route('formMotor.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="namaMotor" class="form-label mb-3">Nama Motor</label><br>
            <input id="namaMotor" type="text" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="namaMotor" placeholder="Masukkan Nama Motor"><br>
            <label for="hargaMotor" class="form-label mb-3">Harga Motor</label><br>
            <input id="hargaMotor" type="number" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="hargaMotor" placeholder="Masukkan Harga Motor"><br>
            <label for="tahunMotor" class="form-label mb-3">Tahun Motor</label><br>
            <input id="tahunMotor" type="number" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="tahunMotor" placeholder="Masukkan Tahun Motor"><br>
            <label for="kmMotor" class="form-label mb-3">KM Motor</label><br>
            <input id="kmMotor" type="number" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="kmMotor" placeholder="Masukkan KM Motor"><br>
            <label for="gambarMotor" class="form-label mb-3">Gambar Motor</label><br>
            <input id="gambarMotor" type="file" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="gambarMotor" accept=".jpg, .jpeg, .png, .svg"><br>
            <button type="submit" class="button bg-blue-500 text-white px-5 py-3 rounded-lg cursor-pointer">Tambah Motor</button>
        </form>
    </div>
@endsection