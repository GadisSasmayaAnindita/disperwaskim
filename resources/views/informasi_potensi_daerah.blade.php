<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
    <x-layout_informasi>
        {{-- card potensi daerah 1 --}}
        <x-card-layout>
            <img class="w-full h-[250px] object-fill " src="storage/galeri8.jpg" alt="Gambar Berita">
            <div class="p-4">
                <h2 class="text-[#0D121E] text-xl font-bold mb-2">potensi daerah1</h2>
                <p class="text-gray-600 text-sm mb-4">Diposting pada: 9 Desember 2024</p>
                <p class="text-[#0D121E] mb-4">Ini adalah ringkasan potensi daerah. Konten potensi daerah ini memberikan
                    informasi penting dan menarik bagi pembaca.</p>
                <a href="#" class="text-blue-500 hover:underline">Baca selengkapnya</a>
            </div>
        </x-card-layout>
    
        {{-- card potensi daerah 2 --}}
        <x-card-layout>
            <img class="w-full h-[250px] object-fill " src="storage/galeri7.jpg" alt="Gambar Berita"> 
            <div class="p-4">
                <h2 class=" text-[#0D121E] text-xl font-bold mb-2">potensi daerah2</h2>
                <p class="text-gray-600 text-sm mb-4">Diposting pada: 9 Desember 2024</p>
                <p class="text-[#0D121E] mb-4">Ini adalah ringkasan potensi daerah. Konten potensi daerah ini memberikan
                    informasi penting dan menarik bagi pembaca.</p>
                <a href="#" class="text-blue-500 hover:underline">Baca selengkapnya</a>
            </div>
        </x-card-layout>
    </x-layout_informasi>

    <x-footer></x-footer>
</body>
</html>