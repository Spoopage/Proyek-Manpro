@extends('layout')

@section('content')
    <!-- Banner -->
    <img src="https://pantiasuhan.org/wp-content/uploads/2020/12/donasi.jpg" 
         alt="Banner Donasi" 
         class="w-full h-auto object-cover rounded-lg mb-4">

    <!-- Judul -->
    <h1 class="text-3xl font-bold mb-6">Donasi untuk Panti Asuhan Ora et Labora Surabaya</h1>

    <!-- Deskripsi Donasi -->
    <p class="text-gray-700 mb-4">
        Terima kasih telah mempertimbangkan untuk memberikan donasi kepada Panti Asuhan Ora et Labora. Donasi Anda akan sangat membantu dalam memenuhi kebutuhan harian anak-anak di panti asuhan ini.
    </p>

    <!-- Cara Transfer Donasi -->
    <h2 class="text-2xl font-semibold mb-2">Cara Transfer Donasi</h2>
    <p class="text-gray-700 mb-4">
        Anda dapat memberikan donasi melalui transfer bank. Silakan transfer ke rekening di bawah ini:
    </p>

    <!-- Detail Rekening Bank -->
    <div class="mb-4">
        <h3 class="text-lg font-bold">Bank BCA</h3>
        <p class="text-gray-700">No. Rekening: 1234567890</p>
        <p class="text-gray-700">Atas Nama: Yayasan Panti Asuhan Ora et Labora</p>
    </div>
    <div class="mb-4">
        <h3 class="text-lg font-bold">Bank Mandiri</h3>
        <p class="text-gray-700">No. Rekening: 0987654321</p>
        <p class="text-gray-700">Atas Nama: Yayasan Panti Asuhan Ora et Labora</p>
    </div>

    <!-- QRIS Image -->
    <div class="mb-4">
        <img src="URL_TO_YOUR_QRIS_IMAGE" alt="QRIS" class="w-full h-auto object-cover rounded-lg">
    </div>

    <!-- Informasi Tambahan -->
    <h2 class="text-2xl font-semibold mb-2">Informasi Tambahan</h2>
    <p class="text-gray-700 mb-4">
        Mohon untuk mengirimkan bukti transfer ke nomor WhatsApp kami di 0812-3456-7890 agar donasi Anda dapat segera kami konfirmasi. Terima kasih atas dukungan dan kebaikan Anda.
    </p>
@endsection
