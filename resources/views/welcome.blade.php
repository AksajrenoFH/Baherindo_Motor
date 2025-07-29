@extends('layouts.main')

@section('title', 'Welcome to Baherindo Motor')

@section('content')
    <div class="container">
        <h1 class="text-3xl font-semibold text-center p-3">Welcome to Baherindo Motor</h1>
        <p class="text-center text-xl text-underline">Jual beli motor Second termurah di bekasi</p><br>
        <div class="w-full flex justify-center align-center">
            <div class="w-3/4 mx-auto px-4 flex gap-6 flex-wrap">
                @foreach ($motor as $m)
                    <div class="card bg-blue-500 border border-gray-700 rounded-lg overflow-hidden shadow-lg text-white">
                        <img class="w-full h-48 object-cover" src="{{ asset('images/motor.jpg') }}" alt="">
                        <div class="p-5">
                            <h1 class="text-3xl font-semibold pb-3">{{ $m['name'] }}</h1>
                            <span class="pb-3"><b>Harga : </b>Rp {{ number_format($m['price'], 0, ',', '.') }}</span>
                            <div class="teks pt-3">
                                <p><b>Tahun : </b>{{ $m['tahun'] }}</p>
                                <p><b>Km : </b>{{ $m['km'] }}km/s</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection