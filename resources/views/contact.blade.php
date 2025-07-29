@extends('layouts.main')

@section('title', 'Kontak - Baherindo Motor')

@section('content')
    <div class="container mx-auto px-4 py-10 flex flex-col md:flex-row justify-center items-start gap-10">
        <div class="left flex justify-center h-100 flex-col md:w-1/2">
            <h1 class="text-4xl text-blue-500 font-bold mb-15 text-center md:text-left">Hubungi Kami</h1>
            <p class="text-gray-700 text-lg leading-relaxed">
                Untuk informasi lebih lanjut, silakan menghubungi kami melalui formulir di samping ini. Kami akan segera membalas pesan Anda secepat mungkin.
            </p>

            <div class="mt-6 space-y-2 text-gray-600 text-base">
                <p><strong>Alamat:</strong> Jl. Contoh Raya No. 123, Bekasi</p>
                <p><strong>Telepon:</strong> 0812-3456-7890</p>
                <p><strong>Email:</strong> baherindomotor@gmail.com</p>
            </div>
        </div>

        <div class="right md:w-1/2 w-full bg-white p-6 rounded-xl shadow-md">
            <form>
                <div class="mb-4">
                    <label for="nama" class="block text-gray-800 font-semibold mb-1">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" />
                    <div class="text-red-500 text-sm mt-1 hidden">Nama harus diisi</div>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-800 font-semibold mb-1">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan Email"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" />
                    <div class="text-red-500 text-sm mt-1 hidden">Email harus diisi</div>
                </div>

                <div class="mb-6">
                    <label for="pesan" class="block text-gray-800 font-semibold mb-1">Pesan</label>
                    <textarea id="pesan" name="pesan" placeholder="Masukkan Pesan"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 h-32 resize-none focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                    <div class="text-red-500 text-sm mt-1 hidden">Pesan harus diisi</div>
                </div>

                <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                    Kirim Pesan
                </button>
            </form>
        </div>
    </div>
@endsection
