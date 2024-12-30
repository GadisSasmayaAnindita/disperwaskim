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
            <div class="flex sm:flex-row items-center"
                data-aos-duration="1000">
                <div class="w-full p-6 flex flex-col">
                    <h2 class="text-2xl font-semibold mb-4 text-blue-500">
                        Dinas Perumahan dan Kawasan Permukiman
                    </h2>
                    <p class="text-gray-700 mb-8">
                        Ini adalah deskripsi singkat tentang konten yang ada di dalam card ini. Ini adalah deskripsi singkat tentang konten yang ada di dalam card ini. Ini adalah deskripsi singkat tentang konten yang ada di dalam card ini. Ini adalah deskripsi singkat tentang konten yang ada di dalam card ini. Ini adalah deskripsi singkat tentang konten yang ada di dalam card ini.
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
    </div>

    <!-- Tentang Dinas -->
    <div class="bg-white-300 p-8">
        <div class="bg-white-500 flex flex-col sm:flex-row items-center justify-center mt-12 rounded-lg shadow-md max-w-4xl mx-auto relative"
            data-aos-duration="1000" style="border: 4px solid white; box-shadow: 0 0 0 2px rgba(0, 0, 255, 0.5);">
            <div class="w-full sm:w-1/2 flex justify-center items-center p-4">
                <img src="storage/login.svg" alt="Deskripsi Gambar" class=" object-fit rounded-lg">
            </div>
            <div class="w-full sm:w-1/2 p-6 flex flex-col justify-between">
                <h2 class="text-2xl font-semibold mb-2 text-blue-500">Dinas Perumahan dan Kawasan Permukiman</h2>
                <p class="text-gray-700">Ini adalah deskripsi singkat tentang konten yang ada di dalam card ini.</p>
                <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600">
                    Selengkapnya
                </button>
            </div>
        </div>
    </div> --}}

    <!-- Apa Itu Disperwaskim -->
    <div class="flex flex-col mt-20 border border-[rgba(0,0,255,0.5)] rounded-lg shadow-md max-w-3xl mx-auto min-h-[200px] bg-white">
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
    <div class="px-8 bg-berita1 flex mt-20">
        <div class="text-white mt-20">
            <h1 class="text-3xl font-bold" data-aos="zoom-in">Berita Terkini</h1>
        </div>
        <div class="container mx-auto mt-10 grid justify-items-end  ">
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

    <!-- Galeri Foto -->
    <div class="bg-white p-8">
        <div class="mt-20 max-w-6xl mx-auto">
            <h2 class="text-3xl text-center font-bold text-gray-800 mt-8 mb-12" data-aos="zoom-in">Galeri foto</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div class="h-48 bg-gray-300 flex justify-center items-center" data-aos="fade-right"
                    data-aos-duration="1000" data-aos-delay="400">
                </div>
                <div class="h-48 bg-gray-300 flex justify-center items-center" data-aos="fade-right"
                    data-aos-duration="1000" data-aos-delay="200">
                </div>
                <div class="h-48 bg-gray-300 flex justify-center items-center" data-aos="fade-right"
                    data-aos-duration="1000">
                </div>
                <div class="h-48 bg-gray-300 flex justify-center items-center" data-aos="fade-right"
                    data-aos-duration="1000" data-aos-delay="400">
                </div>
                <div class="h-48 bg-gray-300 flex justify-center items-center" data-aos="fade-right"
                    data-aos-duration="1000" data-aos-delay="200">
                </div>
                <div class="h-48 bg-gray-300 flex justify-center items-center" data-aos="fade-right"
                    data-aos-duration="1000">
                </div>
            </div>
        </div>
    </div>

    <!-- Galeri Video -->
    <div class="bg-white p-8">
        <div class="mt-20 max-w-6xl mx-auto">
            <h2 class="text-3xl text-center font-bold text-gray-800 mt-8 mb-12" data-aos="zoom-in">Galeri Video
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div class="h-48 bg-gray-300 flex justify-center items-center" data-aos="fade-right"
                    data-aos-duration="1000" data-aos-delay="400">
                    <span class="text-red-600 font-bold">YouTube</span>
                </div>
                <div class="h-48 bg-gray-300 flex justify-center items-center" data-aos="fade-right"
                    data-aos-duration="1000" data-aos-delay="200">
                    <span class="text-red-600 font-bold">YouTube</span>
                </div>
                <div class="h-48 bg-gray-300 flex justify-center items-center" data-aos="fade-right"
                    data-aos-duration="1000">
                    <span class="text-red-600 font-bold">YouTube</span>
                </div>
                <div class="h-48 bg-gray-300 flex justify-center items-center" data-aos="fade-right"
                    data-aos-duration="1000" data-aos-delay="400">
                    <span class="text-red-600 font-bold">YouTube</span>
                </div>
                <div class="h-48 bg-gray-300 flex justify-center items-center" data-aos="fade-right"
                    data-aos-duration="1000" data-aos-delay="200">
                    <span class="text-red-600 font-bold">YouTube</span>
                </div>
                <div class="h-48 bg-gray-300 flex justify-center items-center" data-aos="fade-right"
                    data-aos-duration="1000">
                    <span class="text-red-600 font-bold">YouTube</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Card untuk layanan -->
    <section class="container mx-auto p-5 md:py-6 px-0 md:p-4 md:px-0">
        <!-- Judul untuk card layanan -->
        <h2 class="text-3xl font-bold text-center text-gray-800 mt-8 mb-12" data-aos="zoom-in">Layanan Kami</h2>

        <!-- Flexbox untuk menengahkan grid -->
        <div class="flex flex-wrap justify-center gap-8">
            <!-- Card 1 -->
            <section
                class="w-80 p-3 py-5 bg-blue-50 text-center transform duration-500 hover:-translate-y-1 cursor-pointer rounded-lg shadow-md"
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="20">
                <img class="w-24 mx-auto" src="storage/logotasik.jpg" alt="">
                <h1 class="text-lg my-5 font-semibold">Kelom Geulis</h1>
                <p class="text-sm mt-5 mb-10">Lorem ipsum dolor sit amet consectetur.</p>
                <button class="text-sm p-1 px-3 bg-blue-500 text-white rounded hover:bg-blue-600">Lihat</button>
            </section>

            <!-- Card 2 -->
            <section
                class="w-80 p-3 py-5 bg-blue-50 text-center transform duration-500 hover:-translate-y-1 cursor-pointer rounded-lg shadow-md"
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="20">
                <img class="w-24 mx-auto" src="storage/logotasik.jpg" alt="">
                <h1 class="text-lg my-5 font-semibold">Titasik</h1>
                <p class="text-sm mt-5 mb-10">Lorem ipsum dolor sit amet consectetur.</p>
                <button class="text-sm p-1 px-3 bg-blue-500 text-white rounded hover:bg-blue-600">Lihat</button>
            </section>

            <!-- Card 3 -->
            <section
                class="w-80 p-3 py-5 bg-blue-50 text-center transform duration-500 hover:-translate-y-1 cursor-pointer rounded-lg shadow-md"
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="20">
                <img class="w-24 mx-auto" src="storage/logotasik.jpg" alt="">
                <h1 class="text-lg my-5 font-semibold">Kang Suresman</h1>
                <p class="text-sm mt-5 mb-10">Lorem ipsum dolor sit amet consectetur.</p>
                <button class="text-sm p-1 px-3 bg-blue-500 text-white rounded hover:bg-blue-600">Lihat</button>
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
