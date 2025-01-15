<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disperwaskim</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* .active {
            border-bottom: 2px solid #3b82f6;
            color: #3b82f6;
            display: inline-block;
        } */

        .dropdown-menu {
            display: none;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        #mobile-nav {
            display: none;
        }

        #mobile-nav.open {
            display: block;
        }

         a:hover {
    border-bottom: 2px solid #3b82f6;
    } 

    </style>
</head>

<body class="bg-white">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg fixed w-full top-0 left-0 z-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="#" class="flex items-center py-4 px-2">
                        <img src="storage/logotasik.jpg" alt="Logo" class="h-8 w-8 mr-2">
                        <span class="font-semibold text-gray-500 text-lg">Disperwaskim</span>
                    </a>
                </div>

                <!-- Hamburger Menu -->
                <div class="md:hidden">
                    <button id="menu-toggle" class="text-gray-500 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex justify-center items-center space-x-6" id="nav-links">
                    <a href="/landingpage" id="beranda" class="py-2 px-4 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                        Beranda
                    </a>
                    <a href="/profil" id="profil" class="py-2 px-4 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                        Profil
                    </a>
                    <div class="relative group dropdown">
                        <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                            Bidang
                        </a>
                        <div class="absolute bg-white shadow-lg mt-2 py-2 w-40 dropdown-menu">
                            <a href="/sekretariat" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Sekretariat</a>
                            <a href="/perumahan" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Perumahan</a>
                            <a href="/kawasanpemukiman" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Kawasan Permukiman</a>
                            <a href="/ptd" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Pelaksana Teknik Dinas</a>
                            <a href="/kelompokjabatan" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Kelompok Jabatan</a>
                        </div>
                    </div>
                    <a href="/informasi_berita" id="informasi" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                        Informasi
                    </a>
                    <div class="relative group dropdown">
                        <a href="#" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                            Media
                        </a>
                        <div class="absolute bg-white shadow-lg mt-2 py-2 w-40 dropdown-menu">
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

    <!-- Mobile Navigation -->
    <div class="md:hidden" id="mobile-nav">
        <div class="flex flex-col space-y-2 px-4 py-2 mt-20 bg-white shadow-lg">
            <a href="/landingpage" id="beranda-mobile" class="py-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                Beranda
            </a>
            <a href="/profil" id="profil-mobile" class="py-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                Profil
            </a>
            <div>
                <button class="w-full text-left py-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300" onclick="toggleDropdown('bidang-dropdown-mobile')">
                    Bidang
                </button>
                <div id="bidang-dropdown-mobile" class="hidden flex-col px-4 py-2 space-y-2">
                    <a href="/sekretariat" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Sekretariat</a>
                    <a href="/perumahan" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Perumahan</a>
                    <a href="/kawasanpemukiman" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Kawasan Permukiman</a>
                    <a href="/ptd" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Pelaksana Teknik Dinas</a>
                    <a href="/kelompokjabatan" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Kelompok Jabatan</a>
                </div>
            </div>
            <div>
                <button class="w-full text-left py-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300" onclick="toggleDropdown('media-dropdown-mobile')">
                    Media
                </button>
                <div id="media-dropdown-mobile" class="hidden flex-col px-4 py-2 space-y-2">
                    <a href="/gambar" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Gambar</a>
                    <a href="/video" class="block px-4 py-2 text-gray-700 hover:bg-blue-100">Video</a>
                </div>
            </div>
            <a href="https://ppid.tasikmalayakota.go.id/" target="_blank" id="ppid-mobile" class="py-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                PPID
            </a>
            <a href="/hubungikami" id="hubungikami-mobile" class="py-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">
                Hubungi Kami
            </a>
        </div>
    </div>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileNav = document.getElementById('mobile-nav');

        menuToggle.addEventListener('click', () => {
            mobileNav.classList.toggle('open');
        });

        function toggleDropdown(id) {
            const dropdown = document.getElementById(id);
            dropdown.classList.toggle('hidden');
        }
    </script>
</body>

</html>
