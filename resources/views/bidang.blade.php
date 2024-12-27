<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>disperwaskim</title>
    <style>
        /* Reset margin dan padding untuk memastikan konsistensi */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Menggunakan Flexbox untuk body */
body {
    display: flex;
    flex-direction: column;
    min-height: 100vh; /* Pastikan halaman setidaknya setinggi viewport */
}

/* Bagian navbar */
x-navbar {
    /* Styling navbar kamu di sini */
}

/* Main content (berikan padding jika diperlukan) */
main {
    flex-grow: 1; /* Membuat konten utama mengisi sisa ruang */
    padding: 20px; /* Tambahkan padding untuk memberikan ruang */
}

/* Footer */
x-footer {
    /* Styling footer kamu di sini */
    padding: 20px;
    background-color: #f8f9fa;
    text-align: center;
    /* Misalnya, footer dengan background dan teks yang disesuaikan */
}

</style>

</head>

<body>
    <x-navbar></x-navbar>
    <main>
        <!-- Konten utama di sini -->
    </main>
    <x-footer></x-footer>
</body>

</html>
