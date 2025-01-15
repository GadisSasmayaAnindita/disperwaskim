<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelaksana Teknis Dinas</title>
    <script src="https://cdn.tailwindcss.com">
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        roboto: ['Roboto', 'sans-serif'],
                    },
                },
            },
        }
    </script>

</head>
<x-navbar></x-navbar>
<body class="flex items-center justify-center min-h-screen bg-gray-100 pt-[100px]">
    <!-- Header -->
    <header class="bg-blue-700 text-white w-full h-[100px] rounded-lg flex items-center justify-center mt-20 max-w-6xl mx-auto relative">

        <!-- Area isi header -->
        <div class="flex items-center justify-center h-full">
            <p class="text-lg font-bold">UNIT PELAKSANA TEKNIS DINAS</p>
        </div>
    </header>

    <!-- Konten -->
    <main class="p-6">
        <h1 class="text-2xl font-semibold mt-4 max-w-6xl mx-auto">Pasal 10</h1>
        <p class="mt-4 text-gray-700 max-w-6xl mx-auto">
            Tugas pokok dan rincian tugas UPTD diatur lebih lanjut
            dalam Peraturan Wali Kota tentang Pembentukan Organisasi
           dan Tata Kerja UPTD.

        </p>
    </main>
</body>

<x-footer/>


</html>
