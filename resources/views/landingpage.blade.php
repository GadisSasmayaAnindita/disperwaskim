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
        }

        .card {
            display: flex;
            align-items: center;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 60px;
            /* Jarak antara slider dan card */
            padding: 20px;
            transition: transform 0.3s;
            /* Tambahkan transisi */
        }

        .card:hover {
            transform: scale(1.05);
            /* Efek membesar saat hover */
        }

        .card img {
            width: 400px;
            /* Ukuran gambar dalam card */
            height: auto;
            margin-right: 20px;
            /* Jarak antara gambar dan deskripsi */
            transition: transform 0.3s;
        }

        .card img:hover {
            transform: scale(1.1);
        }

        .description {
            flex: 1;
            /* Membuat deskripsi mengisi sisa ruang */
        }

        /* Ukuran slider */
        .slider img {
            width: 800px;
            /* Ukuran baru slider */
            height: auto;
        }

        .bg-berita1 {
            background: linear-gradient(to bottom, #2C64E8 50%, #ffffff 50%);
        }
    </style>
</head>

<body class="bg-[#ffffff]">
    <x-navbar>
    </x-navbar>

    <!-- Slider -->
    <div class="bg-[#f6f7f9] text-[#0d121e] p-8">
        <div class="mt-20 max-w-6xl mx-auto ">
            <div class="relative overflow-hidden">
                <!-- Slider Wrapper -->
                <div id="slider" class="flex transition-transform duration-500 ease-in-out">
                    <div class="h-80 w-full flex-shrink-0 bg-gray-300 rounded-lg flex items-center justify-center">
                        <p class="text-black font-bold">Layanan 1</p>
                    </div>
                    <div class="h-80 w-full flex-shrink-0 bg-gray-400 flex items-center justify-center">
                        <p class="text-black font-bold">Layanan 2</p>
                    </div>
                    <div class="h-80 w-full flex-shrink-0 bg-gray-500 flex items-center justify-center">
                        <p class="text-black font-bold">Layanan 3</p>
                    </div>
                    <div class="h-80 w-full flex-shrink-0 bg-gray-600 flex items-center justify-center">
                        <p class="text-black font-bold">Layanan 4</p>
                    </div>
                    <div class="h-80 w-full flex-shrink-0 bg-gray-700 flex items-center justify-center">
                        <p class="text-black font-bold">Layanan 5</p>
                    </div>
                </div>

                <!-- Navigasi Slider -->
                <button id="prev"
                    class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white text-blue-500 p-2 rounded-full shadow hover:bg-gray-200">
                    &lt;
                </button>
                <button id="next"
                    class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white text-blue-500 p-2 rounded-full shadow hover:bg-gray-200">
                    &gt;
                </button>
            </div>
        </div>
    </div>


    <!-- Tentang Dinas -->
    <div class="flex items-center justify-center mt-50 border border-gray-300 rounded-lg shadow-md max-w-3xl mx-auto" data-aos-duration="1000" data-aos="fade-up">
        <!-- Gambar -->
        <div class="w-1/2 flex justify-center items-center ">
            <img src="storage/login.svg" alt="Deskripsi Gambar"
                class="max-w-[200px]  max-h-[250px]  object-cover rounded-lg">
        </div>
        <!-- Deskripsi dan Button -->
        <div class="w-1/2 p-6 flex flex-col justify-between">
            <div class="mb-4">
                <h2 class="text-2xl font-semibold mb-2 text-blue-500">Dinas Perumahan dan Kawasan Permukiman
                </h2>
                <p class="text-gray-700">Ini adalah deskripsi singkat tentang konten yang ada di dalam card ini. Anda
                    dapat menambahkan informasi lebih lanjut di sini.</p>
            </div>
            <button class="bg-blue-500 text-white font-semibold py-2 px-2 rounded hover:bg-blue-600 transition-colors">
                Selengkapnya
            </button>
        </div>
    </div>


    <!--Apa Itu Disperwaskim -->
    <div class="flex flex-col mt-20 border border-gray-300 rounded-lg shadow-md max-w-3xl mx-auto min-h-[200px] bg-white " >
        <!-- Judul -->
        <div class="bg-blue-500 text-white text-lg font-semibold px-6 py-3 rounded-lg w-fit -mt-4 shadow-lg">
            Apa Itu Disperwaskim?
        </div>
        <!-- Deskripsi -->
        <div class="p-6 text-gray-700">
            <p>
                Dinas Perumahan dan Kawasan Permukiman adalah lembaga pemerintah daerah yang bertanggung jawab mengelola pembangunan, perbaikan, dan pengaturan perumahan serta kawasan permukiman agar layak huni, tertata, dan sesuai kebutuhan masyarakat.
            </p>
        </div>
    </div>
    
    
    <!-- Berita Terkini -->
    <div class="px-8 bg-berita1 flex mt-20 mx-auto">
        <div class="text-white mt-20">
            <h1 class="text-3xl font-bold">Berita Terkini</h1>
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
        <div class="mt-20 max-w-7xl mx-auto">
            <h2 class="text-3xl text-center font-bold text-gray-800 mt-8 mb-12" data-aos="zoom-in">Galeri Foto</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div class="h-48 bg-gray-300" data-aos="fade-left" data-aos-duration="1000"></div>
                <div class="h-48 bg-gray-300" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200"></div>
                <div class="h-48 bg-gray-300" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400"></div>
                <div class="h-48 bg-gray-300" data-aos="fade-left" data-aos-duration="1000"></div>
                <div class="h-48 bg-gray-300" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200"></div>
                <div class="h-48 bg-gray-300" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400"></div>
            </div>
        </div>
    </div>
    

    <!-- Galeri Video -->
    <div class="bg-white p-8">
        <div class="mt-20 max-w-6xl mx-auto">
            <h2 class="text-3xl text-center font-bold text-gray-800 mt-8 mb-12" data-aos="zoom-in">Galeri Video</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div class="h-48 bg-gray-300 flex justify-center items-center" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
                    <span class="text-red-600 font-bold">YouTube</span>
                </div>
                <div class="h-48 bg-gray-300 flex justify-center items-center" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                    <span class="text-red-600 font-bold">YouTube</span>
                </div>
                <div class="h-48 bg-gray-300 flex justify-center items-center" data-aos="fade-right" data-aos-duration="1000">
                    <span class="text-red-600 font-bold">YouTube</span>
                </div>
                <div class="h-48 bg-gray-300 flex justify-center items-center" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
                    <span class="text-red-600 font-bold">YouTube</span>
                </div>
                <div class="h-48 bg-gray-300 flex justify-center items-center" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                    <span class="text-red-600 font-bold">YouTube</span> 
                </div>
                <div class="h-48 bg-gray-300 flex justify-center items-center" data-aos="fade-right" data-aos-duration="1000">
                    <span class="text-red-600 font-bold">YouTube</span>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Spacer untuk jarak antar section -->
    <div class="my-12"></div>

    <!-- Card untuk layanan -->
    <section class="container mx-auto p-5 md:py-6 px-0 md:p-4 md:px-0">
        <!-- Judul untuk card layanan -->
        <h2 class="text-3xl font-bold text-center text-gray-800 mt-8 mb-12" data-aos="zoom-in">Layanan Kami</h2>

        <!-- Flexbox untuk menengahkan grid -->
        <div class="flex flex-wrap justify-center gap-8">
            <!-- Card 1 -->
            <section
                class="w-80 p-3 py-5 bg-blue-50 text-center transform duration-500 hover:-translate-y-1 cursor-pointer rounded-lg shadow-md" data-aos="flip-right" data-aos-duration="1000">
                <img class="w-24 mx-auto" src="storage/logotasik.jpg" alt="">
                <h1 class="text-lg my-5 font-semibold">Kelom Geulis</h1>
                <p class="text-sm mt-5 mb-10">Lorem ipsum dolor sit amet consectetur.</p>
                <button class="text-sm p-1 px-3 bg-blue-500 text-white rounded hover:bg-blue-600">Lihat</button>
            </section>

            <!-- Card 2 -->
            <section
                class="w-80 p-3 py-5 bg-blue-50 text-center transform duration-500 hover:-translate-y-1 cursor-pointer rounded-lg shadow-md" data-aos="flip-right" data-aos-duration="1000">
                <img class="w-24 mx-auto" src="storage/logotasik.jpg" alt="">
                <h1 class="text-lg my-5 font-semibold">Titasik</h1>
                <p class="text-sm mt-5 mb-10">Lorem ipsum dolor sit amet consectetur.</p>
                <button class="text-sm p-1 px-3 bg-blue-500 text-white rounded hover:bg-blue-600">Lihat</button>
            </section>

            <!-- Card 3 -->
            <section
                class="w-80 p-3 py-5 bg-blue-50 text-center transform duration-500 hover:-translate-y-1 cursor-pointer rounded-lg shadow-md" data-aos="flip-right" data-aos-duration="1000">
                <img class="w-24 mx-auto" src="storage/logotasik.jpg" alt="">
                <h1 class="text-lg my-5 font-semibold">Kang Suresman</h1>
                <p class="text-sm mt-5 mb-10">Lorem ipsum dolor sit amet consectetur.</p>
                <button class="text-sm p-1 px-3 bg-blue-500 text-white rounded hover:bg-blue-600">Lihat</button>
            </section>
        </div>
    </section>




    <x-footer></x-footer>

    <script>
        const slider = document.getElementById('slider');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');
        let currentIndex = 0;

        function updateSlider() {
            const slideWidth = slider.clientWidth / 2; // Set width to half of the container
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

        window.addEventListener('resize', updateSlider); // Update on resize
    </script>

</body>

</html>
