@extends('layout.main')
@section('content')
<div class="h-[20rem] sm:h-[18rem] md:h-[20rem] lg:h-[24rem] bg-cover bg-bottom" style="background-image: url({{ url('img/servmec2b.jpg') }})">
    <div class="relative isolate px-6 pt-9 lg:px-8">
      <div class="mx-auto max-w-1xl py-16 sm:py-21 lg:py-32 lg:px-2 lg:mx-40 md:mx-20 md:py-20 sm:mx-0 font-montserrat">
        <div class="text-left">
            <div class="flex gap-x-2">
                <a href="home" class="text-[14px] leading-[3rem] font-normal text-white tracking-wide lg:text-[17px] hover:text-orangenav  delay-50 duration-300">HOME /</a>
                <a href="bpp" class="text-[14px] leading-[3rem] font-normal text-white tracking-wide lg:text-[17px] hover:text-orangenav  delay-50 duration-300">BPP</a>
            </div>
            <h1 class="text-[20px] font-semibold leading-none pb-9 text-white tracking-normal md:text-[27px] lg:text-[40px]">Boiler & Power Plant</h1>
            <p class="text-[15px] leading-6 font-normal text-white md:text-[15px] lg:text-[18px] tracking-tight font-roboto">
                Includes such as Fludized Bed Boiler, CFBC, Chain Grate Boiler, Reciprocrating Grate Boiler, Gas & Oil Boiler, Thermal Oil Boiler, Power Plant, Boiler Part</p>
        </div>
      </div>
    </div>
</div>
<div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-20 font-montserrat">
    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:gap-2 sm:grid-cols-2 md:gap-4 md:grid-cols-3 lg:gap-4 lg:grid-cols-4 xl:grid-cols-4">
        <a href="fluidized" class="group">
            <div class="relative aspect-h-1 aspect-w-1 rounded-none w-full sm:w-full md:w-full  lg:w-[270px] overflow-hidden bg-cardprod xl:aspect-h-8 xl:aspect-w-7 transition group-hover:-translate-y-2 duration-300">
                <img src="img/fbc2.jpeg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-52 w-full p-5 object-cover object-center">
                <div class="px-8 pb-6">
                    <p class="text-center text-[12px] font-normal leading-5 pb-1">BOILER</p>
                    <div class="flex justify-center text-center font-bold text-[18px] mb-1">Fluidized Bed Boiler</div>
                    <p class="text-[15px] font-normal font-roboto text-center leading-6">
                        FBB is an interesting and innovative combustion system used to produce steam or electricity..
                    </p>
                </div>
            </div>
        </a>
        <a href="cfbc" class="group">
            <div class="relative aspect-h-1 aspect-w-1 rounded-none w-full sm:w-full md:w-full  lg:w-[270px] overflow-hidden bg-cardprod xl:aspect-h-8 xl:aspect-w-7 transition group-hover:-translate-y-2 duration-300">
                <img src="img/cfbc1.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-52 w-full p-5 object-cover object-center">
                <div class="px-8 pb-6">
                    <p class="text-center text-[12px] font-normal leading-5 pb-1">BOILER</p>
                    <div class="flex justify-center text-center font-bold text-[18px] mb-1">CFBC</div>
                    <p class="text-[15px] font-normal font-roboto text-center leading-6">
                        The circulating fluidized bed (CFB) is a type of fluidized bed combustion that utilizes a recirculating loop..
                    </p>
                </div>
            </div>
        </a>
        <a href="cgb" class="group">
            <div class="relative aspect-h-1 aspect-w-1 rounded-none w-full sm:w-full md:w-full  lg:w-[270px] overflow-hidden bg-cardprod xl:aspect-h-8 xl:aspect-w-7 transition group-hover:-translate-y-2 duration-300">
                <img src="img/fbc3e.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-52 w-full p-5 object-cover object-center">
                <div class="px-8 pb-6">
                    <p class="text-center text-[12px] font-normal leading-5 pb-1">BOILER</p>
                    <div class="flex justify-center text-center font-bold text-[18px] mb-1">Chain Grate Boiler</div>
                    <p class="text-[15px] font-normal font-roboto text-center leading-6">
                        A type of mechanical stoker for a furnace, in which the grate consists of an endless chain that draws..
                    </p>
                </div>
            </div>
        </a>
        <a href="rgb" class="group">
            <div class="relative aspect-h-1 aspect-w-1 rounded-none w-full sm:w-full md:w-full  lg:w-[270px] overflow-hidden bg-cardprod xl:aspect-h-8 xl:aspect-w-7 transition group-hover:-translate-y-2 duration-300">
                <img src="img/fbc4.png" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-52 w-full p-5 object-cover object-center">
                <div class="px-8 pb-6">
                    <p class="text-center text-[12px] font-normal leading-5 pb-1">BOILER</p>
                    <div class="flex justify-center text-center font-bold text-[18px] mb-1">RGB</div>
                    <p class="text-[15px] font-normal font-roboto text-center leading-6">
                        The grate is air cooled and divided into three to five zones per lane with one to three lanes in total..
                    </p>
                </div>
            </div>
        </a>
        <a href="gob" class="group">
            <div class="relative aspect-h-1 aspect-w-1 rounded-none w-full sm:w-full md:w-full  lg:w-[270px] overflow-hidden bg-cardprod xl:aspect-h-8 xl:aspect-w-7 transition group-hover:-translate-y-2 duration-300">
                <img src="img/gaoi3.jpg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-52 w-full p-5 object-cover object-center">
                <div class="px-8 pb-6">
                    <p class="text-center text-[12px] font-normal leading-5 pb-1">BOILER</p>
                    <div class="flex justify-center text-center font-bold text-[18px] mb-1">Gas & Oil Boiler</div>
                    <p class="text-[15px] font-normal font-roboto text-center leading-6">
                        Gas boilers are powered by natural gas or propane and are more efficient than standard boilers. The fuel..
                    </p>
                </div>
            </div>
        </a>
        <a href="tob" class="group">
            <div class="relative aspect-h-1 aspect-w-1 rounded-none w-full sm:w-full md:w-full  lg:w-[270px] overflow-hidden bg-cardprod xl:aspect-h-8 xl:aspect-w-7 transition group-hover:-translate-y-2 duration-300">
                <img src="img/fbc1.jpeg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-52 w-full p-5 object-cover object-center">
                <div class="px-8 pb-6">
                    <p class="text-center text-[12px] font-normal leading-5 pb-1">BOILER</p>
                    <div class="flex justify-center text-center font-bold text-[18px] mb-1">Thermal Oil Boiler</div>
                    <p class="text-[15px] font-normal font-roboto text-center leading-6">
                        A thermal oil boiler fires through a helical coil and generates energy from the hot products of..
                    </p>
                </div>
            </div>
        </a>
        <a href="pp" class="group">
            <div class="relative aspect-h-1 aspect-w-1 rounded-none w-full sm:w-full md:w-full  lg:w-[270px] overflow-hidden bg-cardprod xl:aspect-h-8 xl:aspect-w-7 transition group-hover:-translate-y-2 duration-300">
                <img src="img/pp2.jpeg" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-52 w-full p-5 object-cover object-center">
                <div class="px-8 pb-6">
                    <p class="text-center text-[12px] font-normal leading-5 pb-1">BOILER</p>
                    <div class="flex justify-center text-center font-bold text-[18px] mb-1">Power Plant</div>
                    <p class="text-[15px] font-normal font-roboto text-center leading-6">
                        A power plant is a type of industrial building used to produce electricity using raw materials. To meet..
                    </p>
                </div>
            </div>
        </a>
        <a href="bp" class="group">
            <div class="relative aspect-h-1 aspect-w-1 rounded-none w-full sm:w-full md:w-full  lg:w-[270px] overflow-hidden bg-cardprod xl:aspect-h-8 xl:aspect-w-7 transition group-hover:-translate-y-2 duration-300">
                <img src="img/bf1.png" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-52 w-full p-5 object-cover object-center">
                <div class="px-8 pb-6">
                    <p class="text-center text-[12px] font-normal leading-5 pb-1">BOILER</p>
                    <div class="flex justify-center text-center font-bold text-[18px] mb-1">Boiler Part</div>
                    <p class="text-[15px] font-normal font-roboto text-center leading-6">
                        Boiler part is an essential part of the boiler. It includes such as Daerator, ESP and Bag Filter..
                    </p>
                </div>
            </div>
        </a>
    </div>
</div>

@endsection
