<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informasi</title>
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

<body class="bg-white ">
        <div>
            <x-navbar></x-navbar>
        </div>
        <div class="px-4 container mx-auto mt-[80px] ">
            <x-choice-chip-informasi></x-choice-chip-informasi>
            <main class=" max-w-6xl px-4 mx-auto flex flex-wrap container gap-10">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>
