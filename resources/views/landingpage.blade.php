<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">

    <title>Disperwaskim</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .slider {
            transition: transform 0.5s ease;
            margin-top: 50px;
            overflow: hidden;
        }

        .card {
            display: flex;
            align-items: center;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 60px;
            padding: 20px;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: auto;
            max-width: 300px;
            margin-right: 20px;
            transition: transform 0.3s;
        }

        .card img:hover {
            transform: scale(1.1);
        }

        .description {
            flex: 1;
        }

        .slider img {
            width: 100%;
            height: auto;
            max-width: 800px;
        }

        .bg-berita1 {
            background: linear-gradient(to bottom, #2C64E8 50%, white 50%);
        }
    </style>
</head>

<body class="bg-[#ffffff] w-full">
    <x-navbar></x-navbar>

    {{-- tentang dinas & slider --}}
    <div class="flex flex-wrap gap-8 p-8 mt-20">
        <!-- Tentang Dinas -->
        <div class="flex-1 bg-white p-8 rounded-lg max-w-4xl mx-auto">
            <div class="flex sm:flex-row items-center" data-aos-duration="1000">
                <div class="w-full p-6 flex flex-col">
                    <h2 class="text-2xl font-semibold mb-4 text-blue-500">
                        Dinas Perumahan dan Kawasan Permukiman
                    </h2>
                    <p class="text-gray-700 mb-8">
                        Ini adalah deskripsi singkat tentang konten yang ada di dalam card ini. Ini adalah deskripsi
                        singkat tentang konten yang ada di dalam card ini. Ini adalah deskripsi singkat tentang konten
                        yang ada di dalam card ini. Ini adalah deskripsi singkat tentang konten yang ada di dalam card
                        ini. Ini adalah deskripsi singkat tentang konten yang ada di dalam card ini.
                    </p>
                    <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600">
                        Selengkapnya
                    </button>
                </div>
            </div>
        </div>

        <!-- Slider -->
        <div class="flex-1 bg-white text-[#0d121e] p-8 rounded-lg">
            <div class="relative overflow-hidden max-w-full mx-auto">
                <div id="slider" class="flex transition-transform duration-500 ease-in-out">
                    <div class="h-96 w-full flex-shrink-0 bg-gray-300 rounded-lg flex items-center justify-center">
                        <p class="text-black font-bold">Layanan 1</p>
                    </div>
                    <div class="h-96 w-full flex-shrink-0 bg-gray-400 rounded-lg flex items-center justify-center">
                        <p class="text-black font-bold">Layanan 2</p>
                    </div>
                    <div class="h-96 w-full flex-shrink-0 bg-gray-500 rounded-lg flex items-center justify-center">
                        <p class="text-black font-bold">Layanan 3</p>
                    </div>
                    <div class="h-96 w-full flex-shrink-0 bg-gray-600 rounded-lg flex items-center justify-center">
                        <p class="text-black font-bold">Layanan 4</p>
                    </div>
                    <div class="h-96 w-full flex-shrink-0 bg-gray-700 rounded-lg flex items-center justify-center">
                        <p class="text-black font-bold">Layanan 5</p>
                    </div>
                </div>

                <!-- Navigasi Slider -->
                <button id="prev"
                    class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white text-blue-500 p-2 rounded-full shadow hover:bg-gray-200">
                    &lt;
                </button>
                <button id="next"
                    class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white text-blue-500 p-2 rounded-full shadow hover:bg-gray-200">
                    &gt;
                </button>
            </div>
        </div>
    </div>


    {{-- <!-- Slider -->
    <div class="bg-white-500 text-[#0d121e]">
        <div class="mt-20 p-8">
            <div class="relative overflow-hidden max-w-7xl mx-auto">
                <div id="slider" class="flex transition-transform duration-500 ease-in-out">
                    <div class="h-96 w-full flex-shrink-0 bg-gray-300 rounded-lg flex items-center justify-center">
                        <p class="text-black font-bold">Layanan 1</p>
                    </div>
                    <div class="h-96 w-full flex-shrink-0 bg-gray-400 flex items-center justify-center">
                        <p class="text-black font-bold">Layanan 2</p>
                    </div>
                    <div class="h-96 w-full flex-shrink-0 bg-gray-500 flex items-center justify-center">
                        <p class="text-black font-bold">Layanan 3</p>
                    </div>
                    <div class="h-96 w-full flex-shrink-0 bg-gray-600 flex items-center justify-center">
                        <p class="text-black font-bold">Layanan 4</p>
                    </div>
                    <div class="h-96 w-full flex-shrink-0 bg-gray-700 flex items-center justify-center">
                        <p class="text-black font-bold">Layanan 5</p>
                    </div>
                </div>

                <!-- Navigasi Slider -->
                <button id="prev"
                    class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white text-blue-500 p-2 rounded-full shadow hover:bg-gray-200">
                    &lt;
                </button>
                <button id="next"
                    class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white text-blue-500 p-2 rounded-full shadow hover:bg-gray-200">
                    &gt;
                </button>
            </div>
        </div>
    </div> --}}

    <!-- Tentang Dinas -->
    <div class="bg-white-300 p-8">
        <div class="bg-white-500 flex flex-col sm:flex-row  mt-12 rounded-lg shadow-md max-w-4xl mx-auto relative"
            data-aos-duration="1000" style="">
            <div class="w-full sm:w-1/2 flex justify-center items-center p-4">
                <img src="storage/login.svg" alt="Deskripsi Gambar" class=" object-fit rounded-lg">
            </div>
            <div class="w-full sm:w-1/2 p-6 flex flex-col ">
                <h2 class="text-2xl font-semibold mb-2 text-blue-500">Kepala Dinas Komunikasi dan Informatika</h2>
                <p class="text-gray-700">H. Hanafi, S.H., M.H.</p>
            </div>
        </div>
    </div>

    <!-- Apa Itu Disperwaskim -->
    <div
        class="flex flex-col mt-20 border border-[rgba(0,0,255,0.5)] rounded-lg shadow-md max-w-3xl mx-auto min-h-[200px] bg-white">
        <div class="bg-blue-500 text-white text-lg font-semibold px-6 py-3 rounded-lg w-fit -mt-4 shadow-lg"
            data-aos="zoom-in">
            Apa Itu Disperwaskim?
        </div>
        <div class="p-6 text-gray-700">
            <p>
                Dinas Perumahan dan Kawasan Permukiman adalah lembaga pemerintah daerah yang bertanggung jawab
                mengelola pembangunan, perbaikan, dan pengaturan perumahan serta kawasan permukiman agar layak huni,
                tertata, dan sesuai kebutuhan masyarakat.
            </p>
        </div>
    </div>


    <!-- Berita Terkini -->
    <div>
        <div class="px-8 bg-berita1 flex mt-20">
            <div class="text-white mt-20">
                <h1 class="text-3xl font-bold" data-aos="zoom-in">Berita Terkini</h1>
            </div>
            <div class="container mx-auto mt-10 grid justify-items-end " data-aos="fade-up" data-aos-duration="1000">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img src="https://via.placeholder.com/300x150" alt="News Image"
                            class="w-full h-48 object-cover rounded-t-lg">
                        <div class="mt-4">
                            <h5 class="text-xl font-bold">News Title 2</h5>
                            <p class="mt-2 text-gray-600">Short description of the news content.</p>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img src="https://via.placeholder.com/300x150" alt="News Image"
                            class="w-full h-48 object-cover rounded-t-lg">
                        <div class="mt-4">
                            <h5 class="text-xl font-bold">News Title 3</h5>
                            <p class="mt-2 text-gray-600">Short description of the news content.</p>
                        </div>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img src="https://via.placeholder.com/300x150" alt="News Image"
                            class="w-full h-48 object-cover rounded-t-lg">
                        <div class="mt-4">
                            <h5 class="text-xl font-bold">News Title 3</h5>
                            <p class="mt-2 text-gray-600">Short description of the news content.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="flex justify-center items-center mt-10" data-aos="zoom-in">
            <a href="/informasi_berita" rel="noopener noreferrer"
                class="px-6 py-3 bg-blue-500 text-white rounded-lg text-sm font-semibold hover:bg-blue-600 transition">
                Lihat Semua Berita
            </a>
        </div>
    </div>

    <!-- Galeri Foto -->
    <div class="bg-white p-8">
        <div class="mt-20 max-w-6xl mx-auto">
            <h2 class="text-3xl text-center font-bold text-gray-800 mt-8 mb-12" data-aos="zoom-in">Galeri Foto</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Image 1 -->
                <div class="bg-gray-300 flex justify-center items-center relative group" data-aos="fade-right"
                    data-aos-duration="1000" data-aos-delay="100">
                    <img src="storage/galeri1.jpg" alt="Image 1"
                        class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 h-auto py-2">
                        <p class="text-white text-sm px-4 truncate">Rapat Koordinasi KATASIK</p>
                    </div>
                </div>

                <!-- Image 2 -->
                <div class="bg-gray-300 flex justify-center items-center relative group" data-aos="fade-right"
                    data-aos-duration="1000" data-aos-delay="200">
                    <img src="storage/galeri2.jpg" alt="Image 2"
                        class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 h-auto py-2">
                        <p class="text-white text-sm px-4 truncate">Kegiatan Sosialisasi Program</p>
                    </div>
                </div>

                <!-- Image 3 -->
                <div class="bg-gray-300 flex justify-center items-center relative group" data-aos="fade-right"
                    data-aos-duration="1000" data-aos-delay="300">
                    <img src="storage/galeri3.jpg" alt="Image 3"
                        class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 h-auto py-2">
                        <p class="text-white text-sm px-4 truncate">Pelatihan Kepemimpinan</p>
                    </div>
                </div>

                <!-- Image 4 -->
                <div class="bg-gray-300 flex justify-center items-center relative group" data-aos="fade-right"
                    data-aos-duration="1000" data-aos-delay="400">
                    <img src="storage/galeri4.jpg" alt="Image 4"
                        class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 h-auto py-2">
                        <p class="text-white text-sm px-4 truncate">Rapat Evaluasi Tahunan</p>
                    </div>
                </div>

                <!-- Image 5 -->
                <div class="bg-gray-300 flex justify-center items-center relative group" data-aos="fade-right"
                    data-aos-duration="1000" data-aos-delay="500">
                    <img src="storage/galeri5.jpg" alt="Image 5"
                        class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 h-auto py-2">
                        <p class="text-white text-sm px-4 truncate">Kegiatan Gotong Royong</p>
                    </div>
                </div>

                <!-- Image 6 -->
                <div class="bg-gray-300 flex justify-center items-center relative group" data-aos="fade-right"
                    data-aos-duration="1000" data-aos-delay="600">
                    <img src="storage/galeri6.jpg" alt="Image 6"
                        class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 h-auto py-2">
                        <p class="text-white text-sm px-4 truncate">Pelayanan Publik Terintegrasi</p>
                    </div>
                </div>

                <!-- Image 7 -->
                <div class="bg-gray-300 flex justify-center items-center relative group" data-aos="fade-right"
                    data-aos-duration="1000" data-aos-delay="700">
                    <img src="storage/galeri7.jpg" alt="Image 7"
                        class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 h-auto py-2">
                        <p class="text-white text-sm px-4 truncate">Rapat Koordinasi Proyek</p>
                    </div>
                </div>

                <!-- Image 8 -->
                <div class="bg-gray-300 flex justify-center items-center relative group" data-aos="fade-right"
                    data-aos-duration="1000" data-aos-delay="800">
                    <img src="storage/galeri8.jpg" alt="Image 8"
                        class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-105">
                    <div
                        class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 flex justify-center items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 h-auto py-2">
                        <p class="text-white text-sm px-4 truncate">Acara Penutupan Proyek</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center mt-10" data-aos="zoom-in">
                <a href="/gambar" rel="noopener noreferrer"
                    class="px-6 py-3 bg-blue-500 text-white rounded-lg text-sm font-semibold hover:bg-blue-600 transition">
                    Lihat Semua Foto
                </a>
            </div>
        </div>
    </div>


    <!-- Galeri Video -->
    <div class="bg-white p-8">
        <div class="mt-20 max-w-6xl mx-auto">
            <h2 class="text-3xl text-center font-bold text-gray-800 mt-8 mb-12" data-aos="zoom-in">Galeri Video</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div class="aspect-video bg-gray-300 flex justify-center items-center transform transition-transform duration-300 hover:scale-105"
                    data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/9sH1NATh0I4" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="aspect-video bg-gray-300 flex justify-center items-center transform transition-transform duration-300 hover:scale-105"
                    data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/LU3hL0tetG8" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="aspect-video bg-gray-300 flex justify-center items-center transform transition-transform duration-300 hover:scale-105"
                    data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/Qx5C_siJQAc" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="aspect-video bg-gray-300 flex justify-center items-center transform transition-transform duration-300 hover:scale-105"
                    data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/K5R1EsSid9s" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="aspect-video bg-gray-300 flex justify-center items-center transform transition-transform duration-300 hover:scale-105"
                    data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/cQBFJBxt9xY" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="aspect-video bg-gray-300 flex justify-center items-center transform transition-transform duration-300 hover:scale-105"
                    data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/9sH1NATh0I4" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="flex justify-center mt-10" data-aos="zoom-in">
                <a href="/video" rel="noopener noreferrer"
                    class="px-6 py-3 bg-blue-500 text-white rounded-lg text-sm font-semibold hover:bg-blue-600 transition">
                    Lihat Semua Video
                </a>
            </div>
        </div>
    </div>


    <!-- Card untuk layanan -->
    <section class="container mx-auto p-5 md:py-6 px-0 md:p-4 md:px-0">
        <h2 class="text-3xl font-bold text-center text-gray-800 mt-8 mb-12" data-aos="zoom-in">Layanan Kami</h2>
        <div class="flex flex-wrap justify-center gap-8">
            <section
                class="w-80 p-3 py-5 bg-blue-50 text-center transform duration-500 hover:-translate-y-1 cursor-pointer rounded-lg shadow-md"
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="20">
                <img class="w-24 mx-auto" src="storage/logotasik.jpg" alt="">
                <h1 class="text-lg my-5 font-semibold">Kang Suresman</h1>
                <p class="text-sm mt-5 mb-10">Lorem ipsum dolor sit amet consectetur.</p>
                <a href="#" target="_blank"
                    class="text-sm p-1 px-3 bg-blue-500 text-white rounded hover:bg-blue-600 inline-block">Lihat</a>
            </section>
            <section
                class="w-80 p-3 py-5 bg-blue-50 text-center transform duration-500 hover:-translate-y-1 cursor-pointer rounded-lg shadow-md"
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="20">
                <img class="w-24 mx-auto" src="storage/logotasik.jpg" alt="">
                <h1 class="text-lg my-5 font-semibold">Kang Suresman</h1>
                <p class="text-sm mt-5 mb-10">Lorem ipsum dolor sit amet consectetur.</p>
                <a href="#" target="_blank"
                    class="text-sm p-1 px-3 bg-blue-500 text-white rounded hover:bg-blue-600 inline-block">Lihat</a>
            </section>
            <section
                class="w-80 p-3 py-5 bg-blue-50 text-center transform duration-500 hover:-translate-y-1 cursor-pointer rounded-lg shadow-md"
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="20">
                <img class="w-24 mx-auto" src="storage/logotasik.jpg" alt="">
                <h1 class="text-lg my-5 font-semibold">Kang Suresman</h1>
                <p class="text-sm mt-5 mb-10">Lorem ipsum dolor sit amet consectetur.</p>
                <a href="https://suresman.tasikmalayakota.go.id/" target="_blank"
                    class="text-sm p-1 px-3 bg-blue-500 text-white rounded hover:bg-blue-600 inline-block">Lihat</a>
            </section>

        </div>
    </section>

    <x-footer></x-footer>

    <!-- Script Slider -->
    <script>
        const slider = document.getElementById('slider');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        let currentIndex = 0;

        function updateSlider() {
            const slideWidth = slider.parentElement.offsetWidth; // Lebar container
            slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        }

        prevButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlider();
            }
        });

        nextButton.addEventListener('click', () => {
            if (currentIndex < slider.children.length - 1) {
                currentIndex++;
                updateSlider();
            }
        });

        window.addEventListener('resize', updateSlider);
    </script>
</body>

</html>
