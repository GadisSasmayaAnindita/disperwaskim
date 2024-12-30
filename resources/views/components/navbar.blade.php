<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disperwaskim</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Efek kelas aktif */
        .active {
            border-bottom: 2px solid #3b82f6; /* Garis bawah biru */
            color: #3b82f6; /* Warna teks biru */
        }
    </style>
</head>

<body class="bg-white">
    <nav class="bg-white shadow-lg fixed w-full top-0 left-0 z-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center justify-between">
                <!-- Logo di pojok kiri -->
                <div class="flex items-center">
                    <a href="#" class="flex items-center py-4 px-2">
                        <img src="storage/logotasik.jpg" alt="Logo" class="h-8 w-8 mr-2">
                        <span class="font-semibold text-gray-500 text-lg">Disperwaskim</span>
                    </a>
                </div>

                <!-- Hamburger Icon -->
                <div class="md:hidden">
                    <button id="menu-toggle" class="text-gray-500 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>

                <!-- Menu navigasi untuk desktop -->
                <div class="hidden md:flex justify-center items-center space-x-6" id="nav-links">
                    <a href="/landingpage" id="beranda" class="py-2 px-4 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                        Beranda
                    </a>
                    <a href="/profil" id="profil" class="py-2 px-4 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                        Profil
                    </a>
                    <div class="relative group">
                        <a href="#" id="bidang" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                            Bidang
                        </a>
                        <div class="absolute hidden group-hover:block bg-white shadow-lg mt-2 py-2 w-40">
                            <a href="/sekretariat" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Sekretariat</a>
                            <a href="/perumahan" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Perumahan</a>
                            <a href="/pertanahan" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Pertanahan</a>
                            <a href="/kawasanpemukiman" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Kawasan Pemukiman</a>
                        </div>
                    </div>
                    <a href="/informasi_berita" id="informasi" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                        Informasi
                    </a>
                    <div class="relative group">
                        <a href="#" id="media" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                            Media
                        </a>
                        <div class="absolute hidden group-hover:block bg-white shadow-lg mt-2 py-2 w-40">
                            <a href="/gambar" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Gambar</a>
                            <a href="/video" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Video</a>
                        </div>
                    </div>
                    <a href="https://ppid.tasikmalayakota.go.id/" target="_blank" id="ppid" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                        PPID
                    </a>
                    <a href="/hubungikami" id="hubungikami" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Responsive Navigation Links -->
    <div class="md:hidden" id="mobile-nav" style="display: none;">
        <div class="flex flex-col space-y-2 px-4 py-2 bg-white shadow-lg">
            <a href="/landingpage" id="beranda" class="py-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                Beranda
            </a>
            <a href="/profil" id="profil" class="py-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                Profil
            </a>
            <a href="#" id="bidang" class="py-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                Bidang
            </a>
            <a href="/informasi_berita" id="informasi" class="py-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                Informasi
            </a>
            <a href="#" id="media" class="py-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                Media
            </a>
            <a href="https://ppid.tasikmalayakota.go.id/" target="_blank" id="ppid" class="py-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                PPID
            </a>
            <a href="/hubungikami" id="hubungikami" class="py-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                Hubungi Kami
            </a>
        </div>
    </div>

    <script>
        // Menandai halaman aktif berdasarkan URL
        const currentPage = window.location.pathname; // Mendapatkan URL halaman saat ini
        const menuItems = document.querySelectorAll('a'); // Mendapatkan semua elemen <a>

        menuItems.forEach(item => {
            if (item.getAttribute('href') === currentPage) {
                item.classList.add('active'); // Menambahkan kelas 'active' pada elemen yang sesuai
            }
        });

        // Toggle mobile navigation
        const menuToggle = document.getElementById('menu-toggle');
        const mobileNav = document.getElementById('mobile-nav');

        menuToggle.addEventListener('click', () => {
            if (mobileNav.style.display === "none" || mobileNav.style.display === "") {
                mobileNav.style.display = "block";
            } else {
                mobileNav.style.display = "none";
            }
        });
    </script>
</body>

</html>