<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="">
    {{-- card layout --}}
    <main>
        <div class="max-w-[350px] bg-[#F6F7F9] rounded-lg shadow-md overflow-hidden transition duration-300 ease-in-out hover:scale-90  ">
            {{ $slot }}
        </div>
    </main>
</body>

</html>
