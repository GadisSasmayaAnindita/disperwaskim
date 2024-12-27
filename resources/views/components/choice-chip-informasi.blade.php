
<div class="h-[80px] items-center flex gap-8 max-w-6xl mx-auto px-4 ">


    <a href="/informasi_berita"
        class="{{ request()->is('informasi_berita') ? 'bg-[#2C64E8] text-white' : 'text-gray-500  hover:bg-[#EAF1FF]' }} w-[180px] h-[40px] rounded-[20px] items-center justify-center flex ">
        <p class="font-medium ">Berita</p>
    </a>

    <a href="/informasi_potensi_daerah"
        class="{{ request()->is('informasi_potensi_daerah') ? 'bg-[#2C64E8] text-white' : 'text-gray-500  hover:bg-[#EAF1FF]' }} w-[180px] h-[40px] rounded-[20px] items-center justify-center flex">
        <p class="font-medium ">Potensi Daerah</p>
    </a>

</div>