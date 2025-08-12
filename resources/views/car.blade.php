@extends('layouts.main')

@section('title', 'Welcome to Baherindo Mobil')

@section('content')
    <div class="container">
        <h1 class="text-3xl font-semibold text-center p-3">Welcome to Baherindo Mobil</h1>
        <p class="text-center text-xl text-underline">Jual beli Mobil Second termurah di bekasi</p><br>
        <div class="w-full flex justify-center align-center">
            <div class="w-3/4 mx-auto px-4 flex gap-6 flex-wrap">
                @foreach ($mobil as $m)
                    <a href="{{ route('formMobil.show', $m->id) }}">
                        <div class="card bg-blue-500 border border-gray-700 rounded-lg overflow-hidden shadow-lg text-white transition-transform duration-300 hover:scale-105 cursor-pointer">
                            <img class="w-70 h-48" src="{{ asset('storage/' . $m['gambarMobil']) }}" alt="">
                            <div class="p-5">
                                <h1 class="text-3xl font-semibold pb-3 capitalize">{{ $m['namaMobil'] }}</h1>
                                <span><b>Harga : </b>Rp {{ number_format($m['hargaMobil'], 0, ',', '.') }},00</span>
                                <div class="teks">
                                    <p><b>Tahun : </b>{{ $m['tahunMobil'] }}</p>
                                    <p><b>Km : </b>{{ $m['kmMobil'] }} km/s</p>
                                </div>
                            </div>
                            <div class="tombolWA p-5">
                                <a href="https://wa.me/6285899356460?text={{ urlencode('Halo saya tertarik dengan Mobil *' . $m['namaMobil']) . '*' }}"
                                target="_blank"
                                class="btn bg-green-500 btn-lg w-full py-3 text-white flex items-center justify-center gap-2 rounded-3xl">
                                    <i class="fa-brands fa-whatsapp"></i>
                                    Hubungi via WhatsApp
                                </a>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection