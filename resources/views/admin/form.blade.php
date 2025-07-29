@extends('layouts.main')

@section('title', 'Tentang - Baherindo Motor')

@section('content')
    <div class="container">
        <form action="" autocomplete="off">
            <label for="nama" class="form-label mb-3">Nama Motor</label><br>
            <input type="text" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="nama" placeholder="Masukkan Nama Motor"><br>
            <label for="harga" class="form-label mb-3">Harga Motor</label><br>
            <input type="number" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="harga" placeholder="Masukkan Harga Motor"><br>
            <label for="tahun" class="form-label mb-3">Tahun Motor</label><br>
            <input type="number" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="tahun" placeholder="Masukkan Tahun Motor"><br>
            <label for="km" class="form-label mb-3">KM Motor</label><br>
            <input type="number" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="km" placeholder="Masukkan KM Motor"><br>
            <button class="button bg-blue-500 text-white px-5 py-3 rounded-lg">Tambah Motor</button>
        </form>
    </div>
@endsection