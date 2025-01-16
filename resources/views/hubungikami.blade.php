<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami</title>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .map {
            height: 400px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table tr td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <!-- Panggil Navbar Component -->
    <x-navbar />

    <div class="container">
        <div class="header">
            <h1>Kontak Pusdatin Perumahan Rakyat dan Kawasan Pemukiman</h1>
        </div>

        <!-- Map -->
        <div id="map" class="map z-10"></div>

        <!-- Kontak Informasi -->
        <table>
            <tr>
                <td><strong>Alamat Email</strong></td>
                <td>disperwaskim.kotatasik@tasik.go.id</td>
            </tr>
            <tr>
                <td><strong>No. Tlp</strong></td>
                <td>(021) 123-4567</td>
            </tr>
            <tr>
                <td><strong>Nomor Hotline</strong></td>
                <td>0800-123-4567</td>
            </tr>
            <tr>
                <td><strong>Link Facebook</strong></td>
                <td><a href="https://facebook.com" target="_blank"></a></td>
            </tr>
            <tr>
                <td><strong>Link Youtube</strong></td>
                <td><a href="https://www.youtube.com/@PEMERINTAHKOTATASIKMALAYA" target="_blank">@PEMERINTAHKOTATASIKMALAYA</a></td>
            </tr>
            <tr>
                <td><strong>Link Instagram</strong></td>
                <td><a href="https://www.instagram.com/disperwaskim.kotatasik?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">@disperwaskim.kotatasik</a></td>
            </tr>
        </table>
    </div>

    <!-- Panggil Footer Component -->
    <x-footer />

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        // Inisialisasi Peta
        var map = L.map('map').setView([-7.3529629, 108.2289201], 15); // Pusatkan pada lokasi marker
    
        // Tambahkan layer peta dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19, // Maksimal zoom yang lebih realistis
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);
    
        // Tambahkan marker di lokasi tertentu
        var marker = L.marker([-7.3529629, 108.2289201]).addTo(map);
        marker.bindPopup("<b>Disperwaskim</b><br>Tasikmalaya."); // Bind popup tanpa auto open
    </script>    
</body>
</html>