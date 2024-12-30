<!-- layout profil -->
<body>
    <x-navbar></x-navbar>
    <div class="px-4 container mx-auto mt-[80px]">
    <x-choice-chip-profil></x-choice-chip-profil>
        <div class="inline-block px-4">
            <!-- isi content -->
            <main class="text-base">{{ $slot }}</main>
        </div>
    </div>
</body>