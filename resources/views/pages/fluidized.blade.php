@extends('layout.main')
@section('content')
<div class="h-[20rem] sm:h-[18rem] md:h-[20rem] lg:h-[24rem] bg-cover bg-bottom" style="background-image: url({{ url('img/servmec2b.jpg') }})">
    <div class="relative isolate px-6 pt-9 lg:px-8">
      <div class="mx-auto max-w-1xl py-16 sm:py-21 lg:py-32 lg:px-2 lg:mx-40 md:mx-20 md:py-20 sm:mx-0 font-montserrat">
        <div class="text-left">
            <div class="flex gap-x-2">
                <a href="home" class="text-[14px] leading-[3rem] font-normal text-white tracking-wide lg:text-[17px] hover:text-orangenav  delay-50 duration-300">HOME /</a>
                <a href="fluidized" class="text-[14px] leading-[3rem] font-normal text-white tracking-wide lg:text-[17px] hover:text-orangenav  delay-50 duration-300">FBB</a>
            </div>
            <h1 class="text-[20px] font-semibold leading-none pb-9 text-white tracking-normal md:text-[27px] lg:text-[40px]">Fluidized Bed Boiler</h1>
            <p class="text-[15px] leading-6 font-normal text-white md:text-[15px] lg:text-[18px] tracking-tight font-roboto">
                Fluidized Bed Boiler, FBB is an interesting and innovative combustion system used to produce steam or electricity in a variety of industries</p>
        </div>
      </div>
    </div>
</div>
{{-- <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-20 font-montserrat">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <div>
            <h2 class="half-border text-[19px] font-semibold pb-2 leading-none tracking-normal">Browse Services</h2>
            <ul class="pt-4 font-roboto text-[15px] tracking-normal font-normal">
                <li class="border-b-2 border-grey py-2 my-1">
                    <a href="">Fluidized Bed Boiler</a>
                </li>
                <li class="border-b-2 border-grey py-2 my-1">
                    <a href="">CFBC</a>
                </li>
                <li class="border-b-2 border-grey py-2 my-1">
                    <a href="">Chain Grate Boiler</a>
                </li>
                <li class="border-b-2 border-grey py-2 my-1">
                    <a href="">Reciprocrating Grate Boiler</a>
                </li>
                <li class="border-b-2 border-grey py-2 my-1">
                    <a href="">Reciprocrating Grate Boiler</a>
                </li>
                <li class="border-b-2 border-grey py-2 my-1">
                    <a href="">Gas & Oil Boiler</a>
                </li>
                <li class="border-b-2 border-grey py-2 my-1">
                    <a href="">Thermal Oil Boiler </a>
                </li>
                <li class="border-b-2 border-grey py-2 my-1">
                    <a href="">Power Plant</a>
                </li>
                <li class="border-b-2 border-grey py-2 my-1">
                    <a href="">Boiler Part</a>
                </li>
            </ul>
        </div>
        <div>
            <h2 class="text-[14px] font-normal tracking-normal lg:text-[16px]">SERVICE</h2>
            <h1 class="half-border text-[18px] font-semibold py-4 leading-none tracking-wide md:text-[23px] lg:text-[40px]">Fluidized Bed Boiler</h1>
            <p class="py-4 font-roboto">Fluidized Bed Boiler, FBB is an interesting and innovative combustion system used to produce steam or electricity in a variety of industries. Its greatness is ability to burn a wide array of fuels efficiently, including low-quality coal, biomass, and industrial waste.</p>
            <p class="py-4 font-roboto">The fluidized bed boiler process centers on the concept of (fluidization), in which solid fuels such as sand or limestone are suspended and heated by a stream of air or gas flowing through the bed of those particles. The fluidization effect creates an article similar to that of a boiling liquid, allowing better mixing and contact between fuel and combustion air.</p>
        </div>
        <div>
            <img src="img/fbcilu.jpg" class="w-[383px] h-[287px]" alt="">
        </div>
    </div>
</div> --}}
{{-- <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-16 font-montserrat">
    <div class="flex flex-col lg:flex-row">
        <div class="flex-auto px-3 w-full pb-10 lg:w-6">
            <h2 class="half-border text-[19px] font-semibold pb-2 leading-none tracking-normal">Browse Services</h2>
            <ul class="pt-4 font-roboto text-[15px] tracking-normal font-normal">
                <li class="border-b-2 border-grey py-2 my-1">
                    <a class="hover:text-orangenav  delay-50 duration-300" href="">Fluidized Bed Boiler</a>
                </li>
                <li class="border-b-2 border-grey py-2 my-1">
                    <a class="hover:text-orangenav  delay-50 duration-300" href="">CFBC</a>
                </li>
                <li class="border-b-2 border-grey py-2 my-1">
                    <a class="hover:text-orangenav  delay-50 duration-300" href="">Chain Grate Boiler</a>
                </li>
                <li class="border-b-2 border-grey py-2 my-1">
                    <a class="hover:text-orangenav  delay-50 duration-300" href="">Reciprocrating Grate Boiler</a>
                </li>
                <li class="border-b-2 border-grey py-2 my-1">
                    <a class="hover:text-orangenav  delay-50 duration-300" href="">Gas & Oil Boiler</a>
                </li>
                <li class="border-b-2 border-grey py-2 my-1">
                    <a class="hover:text-orangenav  delay-50 duration-300" href="">Thermal Oil Boiler </a>
                </li>
                <li class="border-b-2 border-grey py-2 my-1">
                    <a class="hover:text-orangenav  delay-50 duration-300" href="">Power Plant</a>
                </li>
                <li class="border-b-2 border-grey py-2 my-1">
                    <a class="hover:text-orangenav  delay-50 duration-300" href="">Boiler Part</a>
                </li>
            </ul>
        </div>
        <div class="flex-auto px-3 w-auto lg:w-48">
            <div>
                <h2 class="text-[14px] font-normal tracking-normal lg:text-[16px]">SERVICE</h2>
                <h1 class="half-border text-[18px] font-semibold py-4 leading-normal tracking-wide md:text-[23px] lg:text-[40px]">Fluidized Bed Boiler</h1>
                <p class="py-4 text-[18px] font-roboto tracking-wider font-normal">Fluidized Bed Boiler, FBB is an interesting and innovative combustion system used to produce steam or electricity in a variety of industries. Its greatness is ability to burn a wide array of fuels efficiently, including low-quality coal, biomass, and industrial waste.</p>
                <p class="py-4 text-[15px] font-roboto tracking-wider font-normal">The fluidized bed boiler process centers on the concept of (fluidization), in which solid fuels such as sand or limestone are suspended and heated by a stream of air or gas flowing through the bed of those particles. The fluidization effect creates an article similar to that of a boiling liquid, allowing better mixing and contact between fuel and combustion air.</p>
            </div>
        </div>
        <div class="flex-auto px-3 w-auto lg:w-48">
            <div>
                <img src="img/fbcilu.jpg" class="w-full h-[310px]" alt="">
            </div>
        </div>
    </div>
</div> --}}
<div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-16 font-montserrat">
    <div class="flex flex-col lg:flex-row">
        <div class="flex-auto px-4 w-full lg:w-6 order-3 lg:order-1"> <!-- Updated order for small screens -->
            <h2 class="half-border text-[19px] font-semibold pb-2 leading-none tracking-normal">Browse Services</h2>
            <ul class="pt-4 font-roboto text-[15px] tracking-normal font-normal">
                <li class="border-b-2 border-bordertrans py-2 my-1">
                    <a class="text-orangenav" href="fluidized">Fluidized Bed Boiler</a>
                </li>
                <li class="border-b-2 border-bordertrans py-2 my-1">
                    <a class="hover:text-orangenav  delay-50 duration-300" href="cfbc">CFBC</a>
                </li>
                <li class="border-b-2 border-bordertrans py-2 my-1">
                    <a class="hover:text-orangenav  delay-50 duration-300" href="cgb">Chain Grate Boiler</a>
                </li>
                <li class="border-b-2 border-bordertrans py-2 my-1">
                    <a class="hover:text-orangenav  delay-50 duration-300" href="rgb">Reciprocrating Grate Boiler</a>
                </li>
                <li class="border-b-2 border-bordertrans py-2 my-1">
                    <a class="hover:text-orangenav  delay-50 duration-300" href="gob">Gas & Oil Boiler</a>
                </li>
                <li class="border-b-2 border-bordertrans py-2 my-1">
                    <a class="hover:text-orangenav  delay-50 duration-300" href="tob">Thermal Oil Boiler </a>
                </li>
                <li class="border-b-2 border-bordertrans py-2 my-1">
                    <a class="hover:text-orangenav  delay-50 duration-300" href="pp">Power Plant</a>
                </li>
                <li class="border-b-2 border-bordertrans py-2 my-1">
                    <a class="hover:text-orangenav  delay-50 duration-300" href="bp">Boiler Part</a>
                </li>
            </ul>
        </div>
        <div class="flex-auto px-4 w-auto lg:w-48 order-1 lg:order-2"> <!-- Updated order for small screens -->
            <div>
                <h2 class="text-[14px] font-normal tracking-wide lg:text-[16px]">SERVICE</h2>
                <h1 class="half-border text-[18px] font-semibold py-4 leading-[3.25rem] tracking-normal md:text-[23px] lg:text-[40px]">Fluidized Bed Boiler</h1>
                <p class="py-4 text-[15px] leading-7 font-normal tracking-wider font-roboto">Fluidized Bed Boiler, FBB is an interesting and innovative combustion system used to produce steam or electricity in a variety of industries. Its greatness is ability to burn a wide array of fuels efficiently, including low-quality coal, biomass, and industrial waste.</p>
                <p class="py-4 text-[15px] leading-7 font-normal tracking-wider font-roboto">The fluidized bed boiler process centers on the concept of (fluidization), in which solid fuels such as sand or limestone are suspended and heated by a stream of air or gas flowing through the bed of those particles. The fluidization effect creates an article similar to that of a boiling liquid, allowing better mixing and contact between fuel and combustion air.</p>
            </div>
        </div>
        <div class="flex-auto px-4 w-auto pb-10 lg:w-48 order-2 lg:order-3"> <!-- No need to change order for small screens -->
            <div class="group cursor-pointer">
                <img src="img/fbc3e.jpg" class="w-full h-[310px] pb-4 object-cover object-center" alt="" onclick="openModal('img/fbc3e.jpg')">
                <img src="img/fbc2.jpeg" class="w-full h-[310px] pb-4 object-cover object-center" alt="" onclick="openModal('img/fbc2.jpeg')">
            </div>
        </div>
    </div>
</div>
{{-- <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-16 font-montserrat">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="group cursor-pointer">
            <img src="img/pp1.jpg" alt="Gambar 1" class="h-56 w-full p-5 object-cover object-center group-hover:brightness-50" onclick="openModal('img/pp1.jpg')">
        </div>
        <!-- Tambahkan gambar lainnya di sini -->
    </div>
</div> --}}

@endsection
<style>
    .half-border {
  position: relative;
  display: inline-block;
}

.half-border::after {
  content: '';
  position: absolute;
  bottom: -2px; /* Adjust this value to control the thickness of the border */
  left: 0;
  width: 40%; /* Adjust this value to control the width of the border */
  border-bottom: 3px solid  #EE780A; /* Adjust the color and style as needed */
}
</style>
