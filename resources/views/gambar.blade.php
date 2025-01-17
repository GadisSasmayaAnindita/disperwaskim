<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
        <title>Foto - Disperwaskim</title>

        <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh; /* Pastikan halaman setidaknya setinggi viewport */
    }
    x-navbar {
    }
    
    /* Main content (berikan padding jika diperlukan) */
    main {
        flex-grow: 1; /* Membuat konten utama mengisi sisa ruang */
        padding: 20px; /* Tambahkan padding untuk memberikan ruang */
    }
    x-footer {
        padding: 20px;
        background-color: #f8f9fa;
        text-align: center;
    }
    
    </style>
    </head>
    <body>
        <x-navbar></x-navbar>
        
        <body>
            <x-navbar></x-navbar>
            <main>
                <div class="bg-white p-8">
                    <div class="mt-20 max-w-6xl mx-auto">
                        <h2 class="text-3xl text-center font-bold text-gray-800 mt-8 mb-12">Galeri Foto</h2>
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            <div class="bg-gray-300 flex justify-center items-center relative group">
                                <img src="storage/galeri1.jpg" alt="Image 1"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                                <div
                                    class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 h-auto py-2">
                                    <p class="text-white text-sm px-4 truncate">Rapat Koordinasi KATASIK</p>
                                </div>
                            </div>
                            <div class="bg-gray-300 flex justify-center items-center relative group">
                                <img src="storage/galeri2.jpg" alt="Image 2"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                                <div
                                    class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 h-auto py-2">
                                    <p class="text-white text-sm px-4 truncate">Kegiatan Sosialisasi Program</p>
                                </div>
                            </div>
                            <div class="bg-gray-300 flex justify-center items-center relative group">
                                <img src="storage/galeri3.jpg" alt="Image 3"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                                <div
                                    class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 h-auto py-2">
                                    <p class="text-white text-sm px-4 truncate">Pelatihan Kepemimpinan</p>
                                </div>
                            </div>
                            <div class="bg-gray-300 flex justify-center items-center relative group">
                                <img src="storage/galeri4.jpg" alt="Image 4"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                                <div
                                    class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 h-auto py-2">
                                    <p class="text-white text-sm px-4 truncate">Rapat Evaluasi Tahunan</p>
                                </div>
                            </div>
                            <div class="bg-gray-300 flex justify-center items-center relative group">
                                <img src="storage/galeri5.jpg" alt="Image 5"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                                <div
                                    class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 h-auto py-2">
                                    <p class="text-white text-sm px-4 truncate">Kegiatan Gotong Royong</p>
                                </div>
                            </div>
                            <div class="bg-gray-300 flex justify-center items-center relative group">
                                <img src="storage/galeri6.jpg" alt="Image 6"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                                <div
                                    class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 h-auto py-2">
                                    <p class="text-white text-sm px-4 truncate">Pelayanan Publik Terintegrasi</p>
                                </div>
                            </div>
                            <div class="bg-gray-300 flex justify-center items-center relative group">
                                <img src="storage/galeri7.jpg" alt="Image 7"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                                <div
                                    class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 h-auto py-2">
                                    <p class="text-white text-sm px-4 truncate">Rapat Koordinasi Proyek</p>
                                </div>
                            </div>
                            <div class="bg-gray-300 flex justify-center items-center relative group">
                                <img src="storage/galeri8.jpg" alt="Image 8"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                                <div
                                    class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 h-auto py-2">
                                    <p class="text-white text-sm px-4 truncate">Acara Penutupan Proyek</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <x-footer></x-footer>
        </body>
        
        </html>
        
        
    </body>
</html>
