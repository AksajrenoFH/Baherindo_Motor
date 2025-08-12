@extends('layouts.main')

@section('title', $motor->namaMotor . ' - Baherindo Motor')

@section('content')
<div class="container flex justify-center items-center">
    <div class="card bg-blue-500 w-1/2 flex align-center flex-col text-white rounded-3xl">
        <img src="{{ asset('storage/' . $motor->gambarMotor) }}" class="h-84 rounded-tl-3xl rounded-tr-3xl border-b-3 border-black" alt="{{ $motor->namaMotor }}">
        
        <div class="detailMotor px-5 pb-5 pt-2">
            <h2 class="namaMotor capitalize text-3xl pb-3">
                <b>{{ $motor->namaMotor }}</b>
            </h2>
            <p class="hargaMotor pl-3">
                <b>Harga: </b>{{ 'Rp ' . number_format($motor->hargaMotor, 0, ',', '.') }}
            </p>
            <p class="tahunMotor pl-3">
                <b>Tahun: </b>{{ $motor->tahunMotor }}
            </p>
            <p class="kmMotor pl-3">
                <b>Km: </b>{{ $motor->kmMotor }}
            </p>
        </div>

        
        <div class="tombol p-5">
            <a href="https://wa.me/6285899356460?text={{ urlencode('Halo saya tertarik dengan Motor*' . $motor->namaMotor) . '*' }}"
            target="_blank"
            class="btn bg-green-500 btn-lg w-full py-3 text-white flex items-center justify-center gap-2 transition-all transition-duration-200 hover:scale-101 hover:bg-green-600 rounded-3xl">
            <i class="fa-brands fa-whatsapp"></i>
            Hubungi via WhatsApp
            </a>
            <div class="flex gap-5 pt-5">
                <a href="{{route('formMotor.edit', $motor->id)}}" class="edit bg-amber-500 btn-lg w-full py-3 text-white flex items-center justify-center gap-2 transition-all transition-duration-200 hover:scale-101 hover:bg-amber-600 rounded-3xl">
                    <i class="fa-solid fa-pen-to-square"></i>
                    Edit
                </a>
                <form action="{{ route('formMotor.destroy', $motor->id) }}" method="POST" class="delete w-full">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="cursor-pointer bg-red-500 btn-lg w-full py-3 text-white flex items-center justify-center gap-2 transition-all transition-duration-200 hover:scale-101 hover:bg-red-600 rounded-3xl">
                        <i class="fa-solid fa-trash"></i>
                        Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection