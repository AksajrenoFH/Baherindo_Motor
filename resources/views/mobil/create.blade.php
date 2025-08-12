@extends('layouts.main')

@section('title', 'Form - Baherindo Mobil')

@section('content')
    <div class="container">
        <form action="{{ route('formMobil.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="namaMobil" class="form-label mb-3">Nama Mobil</label><br>
            <input id="namaMobil" type="text" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="namaMobil" placeholder="Masukkan Nama Mobil"><br>
            <label for="hargaMobil" class="form-label mb-3">Harga Mobil</label><br>
            <input id="hargaMobil" type="number" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="hargaMobil" placeholder="Masukkan Harga Mobil"><br>
            <label for="tahunMobil" class="form-label mb-3">Tahun Mobil</label><br>
            <input id="tahunMobil" type="number" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="tahunMobil" placeholder="Masukkan Tahun Mobil"><br>
            <label for="kmMobil" class="form-label mb-3">KM Mobil</label><br>
            <input id="kmMobil" type="number" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="kmMobil" placeholder="Masukkan KM Mobil"><br>
            <label for="gambarMobil" class="form-label mb-3">Gambar Mobil</label><br>
            <input id="gambarMobil" type="file" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="gambarMobil" accept=".jpg, .jpeg, .png, .svg"><br>
            <button type="submit" class="button bg-blue-500 text-white px-5 py-3 rounded-lg cursor-pointer">Tambah Mobil</button>
        </form>
    </div>
@endsection