@extends('layouts.main')

@section('title', 'Edit - Baherindo Mobil')

@section('content')
    <div class="container">
        <form action="{{ route('formMobil.update', $mobil->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="namaMobil" class="form-label mb-3">Nama Mobil</label><br>
            <input id="namaMobil" type="text" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="namaMobil" placeholder="Masukkan Nama Mobil" value="{{ $mobil->namaMobil }}"><br>
            <label for="hargaMobil" class="form-label mb-3">Harga Mobil</label><br>
            <input id="hargaMobil" type="number" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="hargaMobil" placeholder="Masukkan Harga Mobil" value="{{ $mobil->hargaMobil }}"><br>
            <label for="tahunMobil" class="form-label mb-3">Tahun Mobil</label><br>
            <input id="tahunMobil" type="number" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="tahunMobil" placeholder="Masukkan Tahun Mobil" value="{{ $mobil->tahunMobil }}"><br>
            <label for="kmMobil" class="form-label mb-3">KM Mobil</label><br>
            <input id="kmMobil" type="number" class="form-control mb-5 w-full border border-gray-500 rounded-lg p-3 bg-white focus:outline-none focus:ring-3 focus:ring-blue-400" name="kmMobil" placeholder="Masukkan KM Mobil" value="{{ $mobil->kmMobil }}"><br>
            <button type="submit" class="button bg-blue-500 text-white px-5 py-3 rounded-lg cursor-pointer">Edit Mobil</button>
        </form>
    </div>
@endsection