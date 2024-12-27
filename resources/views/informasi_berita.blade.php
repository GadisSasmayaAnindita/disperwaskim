<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <x-layout_informasi>
        {{-- card berita 1 --}}
        <x-card-layout>
            <img class="w-full h-[250px] object-fill" src="storage/berita1.jpg" alt="Gambar Berita">
            <div class="p-4">
                <h2 class="text-xl font-bold mb-2 text-[#0D121E]">
                    berita1</h2>
                <p class="text-gray-600 text-sm mb-4">Diposting
                    pada: 3 Desember 2024</p>
                <p class="text-[#0D121E] mb-4">
                    Ini adalah ringkasan berita. Konten berita ini memberikan informasi penting dan menarik bagi
                    pembaca.
                </p>
                <a href="#"
                    class="text-blue-500 hover:underline">Baca
                    selengkapnya</a>
            </div>
        </x-card-layout>
    </x-layout_informasi>

    <x-footer></x-footer>
</body>

</html>
