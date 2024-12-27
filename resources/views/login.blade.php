<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script>
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

<body class="flex items-center justify-center h-screen font-roboto"
    style="
        background-image: url('{{ asset('storage/bg.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        image-rendering: auto; /* Menjaga rendering gambar agar tetap tajam */
    ">
    <div class="bg-white shadow-md rounded-xl overflow-hidden flex max-w-4xl">
        <!-- Gambar -->
        <div class="w-1/2 bg-cover bg-center" style="background-image: url('{{ asset('storage/login.svg') }}');">
        </div>

        <!-- Form -->
        <div class="w-1/2 p-8">
            <h2 class="text-2xl font-bold mb-4">Masuk</h2>
            <p class="text-gray-600 mb-6">Lorem ipsum dolor sit amet consectetur. Fames nec eget in adipiscing sagittis
                nunc enim at.</p>
            <form action="/login" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Nama <span class="text-red-500">*</span></label>
                    <input type="text" id="name" name="name"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2C64E8]"
                        required>
                </div>
                <div class="mb-6 relative">
                    <label for="password" class="block text-gray-700">Kata Sandi <span
                            class="text-red-500">*</span></label>
                    <div class="relative">
                        <input type="password" id="password" name="password"
                            class="w-full px-4 py-2 pr-10 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#2C64E8]"
                            required>
                        <!-- Ikon Mata -->
                        <button type="button" id="togglePassword" class="absolute inset-y-0 right-3 flex items-center">
                            <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="h-5 w-5 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.3.958-.796 1.83-1.458 2.55m-2.97 2.027A9.956 9.956 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.956 9.956 0 012.167-3.274" />
                            </svg>
                            <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="h-5 w-5 text-gray-500 hidden">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a10.05 10.05 0 011.574-2.535m2.45-2.344a9.966 9.966 0 0112.25 0m-1.658 6.886A9.96 9.96 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.96 9.96 0 011.574-2.535M15.25 15.4A2.5 2.5 0 0012 15c-.899 0-1.715.35-2.3.933m1.286-6.536a3 3 0 014.023 4.024M19 19l-2-2M5 5l2 2" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col space-y-4">
                    <button type="submit"
                        class="bg-[#2C64E8] text-white px-6 py-2 rounded-lg hover:bg-[#2C64E8] w-full">
                        Masuk
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeOpen = document.getElementById('eyeOpen');
        const eyeClosed = document.getElementById('eyeClosed');

        togglePassword.addEventListener('click', () => {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';
            eyeOpen.classList.toggle('hidden', !isPassword);
            eyeClosed.classList.toggle('hidden', isPassword);
        });
    </script>
</body>

</html>
