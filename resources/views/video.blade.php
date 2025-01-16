<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
        <title>Disperwaskim</title>

        <style>
            /* * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body {
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }
            main {
                flex-grow: 1;
                padding: 20px;
            }
            x-footer {
                padding: 20px;
                background-color: #f8f9fa;
                text-align: center;
            } */
        </style>
    </head>
    <body>
        <x-navbar></x-navbar>
        <div>
            <div class="bg-white p-8">
                <div class="mt-20 max-w-6xl mx-auto">
                    <h2 class="text-3xl text-center font-bold text-gray-800 mt-8 mb-12">Galeri Video</h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div class="aspect-10 bg-gray-300 transform transition-transform duration-300 hover:scale-105">
                            <iframe class="w-full h-full" src="https://www.youtube.com/embed/9sH1NATh0I4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="aspect-video bg-gray-300 transform transition-transform duration-300 hover:scale-105">
                            <iframe class="w-full h-full" src="https://www.youtube.com/embed/LU3hL0tetG8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="aspect-video bg-gray-300 transform transition-transform duration-300 hover:scale-105">
                            <iframe class="w-full h-full" src="https://www.youtube.com/embed/Qx5C_siJQAc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="aspect-video bg-gray-300 transform transition-transform duration-300 hover:scale-105">
                            <iframe class="w-full h-full" src="https://www.youtube.com/embed/K5R1EsSid9s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="aspect-video bg-gray-300 transform transition-transform duration-300 hover:scale-105">
                            <iframe class="w-full h-full" src="https://www.youtube.com/embed/cQBFJBxt9xY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="aspect-video bg-gray-300 transform transition-transform duration-300 hover:scale-105">
                            <iframe class="w-full h-full" src="https://www.youtube.com/embed/9sH1NATh0I4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-footer></x-footer>
    </body>
</html>
