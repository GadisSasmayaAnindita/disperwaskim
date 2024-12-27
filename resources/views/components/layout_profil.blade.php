<!-- layout profil -->
<div class="w-screen h-screen items-center justify-center">
    <x-navbar></x-navbar>
    <div class="max-w-6xl mx-auto mt-[80px]">
    <x-choice-chip-profil></x-choice-chip-profil>
        <div class="inline-block px-4">
            <!-- isi content -->
            <main class="text-base">{{ $slot }}</main>
        </div>
    </div>

</div>
