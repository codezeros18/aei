@extends('layout.main')
@section('content')
<div class="h-[20rem] sm:h-[18rem] md:h-[20rem] lg:h-[24rem] bg-cover bg-bottom" style="background-image: url({{ url('img/servmec2b.jpg') }})">
    <div class="relative isolate px-6 pt-9 lg:px-8">
      <div class="mx-auto max-w-1xl py-16 sm:py-21 lg:py-32 lg:px-2 lg:mx-40 md:mx-20 md:py-20 sm:mx-0 font-montserrat">
        <div class="text-left">
            <div class="flex gap-x-2">
                <a href="home" class="text-[14px] leading-[3rem] font-normal text-white tracking-wide lg:text-[17px] hover:text-orangenav  delay-50 duration-300">HOME /</a>
                <a href="masp" class="text-[14px] leading-[3rem] font-normal text-white tracking-wide lg:text-[17px] hover:text-orangenav  delay-50 duration-300">MASP</a>
            </div>
            <h1 class="text-[20px] font-semibold leading-none pb-9 text-white tracking-normal md:text-[27px] lg:text-[40px]">Maintenance & Spareparts</h1>
            <p class="text-[15px] leading-6 font-normal text-white md:text-[15px] lg:text-[18px] tracking-tight font-roboto">
                Includes such as Maintenance & Services and Spareparts</p>
        </div>
      </div>
    </div>
</div>
<div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-20 font-montserrat">
    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:gap-2 sm:grid-cols-2 md:gap-4 md:grid-cols-3 lg:gap-4 lg:grid-cols-4 xl:grid-cols-4">
        <a href="mase" class="group">
            <div class="relative aspect-h-1 aspect-w-1 rounded-none w-full sm:w-full md:w-full  lg:w-[270px] overflow-hidden bg-cardprod xl:aspect-h-8 xl:aspect-w-7 transition group-hover:-translate-y-2 duration-300">
                <img src="img/main1.jpeg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-52 w-full p-5 object-cover object-center">
                <div class="px-8 pb-6">
                    <p class="text-center text-[12px] font-normal leading-5 pb-1">SERVICES</p>
                    <div class="flex justify-center text-center font-bold text-[18px] mb-1">Maintenance & Services</div>
                    <p class="text-[15px] font-normal font-roboto text-center leading-6">
                        Regular maintenance and timely services are crucial to ensuring the longevity..
                    </p>
                </div>
            </div>
        </a>
        <a href="spar" class="group">
            <div class="relative aspect-h-1 aspect-w-1 rounded-none w-full sm:w-full md:w-full  lg:w-[270px] overflow-hidden bg-cardprod xl:aspect-h-8 xl:aspect-w-7 transition group-hover:-translate-y-2 duration-300">
                <img src="img/sparepart.png" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-52 w-full p-5 object-cover object-center">
                <div class="px-8 pb-6">
                    <p class="text-center text-[12px] font-normal leading-5 pb-1">SPAREPARTS</p>
                    <div class="flex justify-center text-center font-bold text-[18px] mb-1">Spareparts</div>
                    <p class="text-[15px] font-normal font-roboto text-center leading-6">
                        Spare parts are essential components that are used to replace damaged or worn-out parts in various types..
                    </p>
                </div>
            </div>
        </a>
    </div>
</div>

@endsection
