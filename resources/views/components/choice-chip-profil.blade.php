
<div class="h-[80px] items-center flex gap-8 max-w-6xl mx-auto px-4 ">


    <a href="/profil"
        class="{{ request()->is('profil') ? 'bg-[#2C64E8] text-white' : 'text-gray-500  hover:bg-[#EAF1FF]' }} w-[180px] h-[40px] rounded-[20px] items-center justify-center flex ">
        <p class="font-medium ">Profil</p>
    </a>

    <a href="/profil_sejarah"
        class="{{ request()->is('profil_sejarah') ? 'bg-[#2C64E8] text-white' : 'text-gray-500  hover:bg-[#EAF1FF]' }} w-[180px] h-[40px] rounded-[20px] items-center justify-center flex">
        <p class="font-medium ">Sejarah</p>
    </a>

    <a href="/profil_struktur_organisasi"
    class="{{ request()->is('profil_struktur_organisasi') ? 'bg-[#2C64E8] text-white' : 'text-gray-500 hover:bg-[#EAF1FF]' }} w-[180px] h-[40px] rounded-[20px] items-center justify-center flex ">
        <p class="font-medium ">Struktur Organisasi</p>
    </a>

    <a href="/profil_visi&misi"
    class="{{ request()->is('profil_visi&misi') ? 'bg-[#2C64E8] text-white' : 'text-gray-500 hover:bg-[#EAF1FF]' }} w-[180px] h-[40px] rounded-[20px] items-center justify-center flex ">
        <p class="font-medium ">Visi & Misi</p>
    </a>
</div>