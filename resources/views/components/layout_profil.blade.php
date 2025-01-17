<body class="flex flex-col min-h-screen">
    <x-navbar></x-navbar>
    <div class="flex flex-col flex-grow container mx-auto mt-[80px] px-4">
        <x-choice-chip-profil></x-choice-chip-profil>
        <div class="flex-grow">
            <!-- isi content -->
            <main class="text-base">{{ $slot }}</main>
        </div>
    </div>
    <x-footer></x-footer>
</body>
