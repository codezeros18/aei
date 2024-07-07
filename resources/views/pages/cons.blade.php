@extends('layout.main')
@section('content')
<div class="h-[20rem] sm:h-[18rem] md:h-[20rem] lg:h-[24rem] bg-cover bg-bottom" style="background-image: url({{ url('img/servmec2b.jpg') }})">
    <div class="relative isolate px-6 pt-9 lg:px-8">
      <div class="mx-auto max-w-1xl py-16 sm:py-21 lg:py-32 lg:px-2 lg:mx-40 md:mx-20 md:py-20 sm:mx-0 font-montserrat">
        <div class="text-left">
            <div class="flex gap-x-2">
                <a href="home" class="text-[14px] leading-[3rem] font-normal text-white tracking-wide lg:text-[17px] hover:text-orangenav  delay-50 duration-300">HOME /</a>
                <a href="cons" class="text-[14px] leading-[3rem] font-normal text-white tracking-wide lg:text-[17px] hover:text-orangenav  delay-50 duration-300">CONSTRUCTION</a>
            </div>
            <h1 class="text-[20px] font-semibold leading-none pb-9 text-white tracking-normal md:text-[27px] lg:text-[40px]">Construction</h1>
            <p class="text-[15px] leading-6 font-normal text-white md:text-[15px] lg:text-[18px] tracking-tight font-roboto">
                Offering comprehensive construction services, we deliver quality and efficiency from blueprint to completion.</p>
        </div>
      </div>
    </div>
</div>
    {{-- <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-20 font-montserrat">
        <div class="text-left">
            <p href="" class="text-[14px] leading-7 font-normal pb-4 tracking-wide lg:text-[17px]">LEARN MORE</p>
            <h1 class="half-border text-[20px] font-semibold leading-10 mb-9 pb-5 tracking-normal md:text-[27px] lg:text-[40px]">Our Construction</h1>
            <p class="text-[15px] leading-8 font-normal mb-20 sm:max-w-none lg:max-w-[70%] md:text-[15px] lg:text-[18px] tracking-wide font-roboto">
                Dedicated to providing a wide array of comprehensive construction services tailored to meet your exact needs, we are committed to ensuring excellence and efficiency every step of the way, from the initial blueprint stage through to the meticulous completion of your project.
            </p>
        </div>
        <div class="grid grid-cols-2 grid-rows-2">
            <div class="group cursor-pointer">
                <img src="img/servmec1a.jpg" class="w-full h-[150px] md:h-[350px] object-cover object-center" alt="" onclick="openModal('img/servmec1a.jpg')">
            </div>
            <div class="group cursor-pointer">
                <img src="img/servmec2a.jpg" class="w-full h-[150px] md:h-[350px] object-cover object-center" alt="" onclick="openModal('img/servmec2a.jpg')">
            </div>
            <div class="group cursor-pointer">
                <img src="img/servmec3.jpg" class="w-full h-[150px] md:h-[350px] object-cover object-center" alt="" onclick="openModal('img/servmec3.jpg')">
            </div>
            <div class="group cursor-pointer">
                <img src="img/servmec4.jpg" class="w-full h-[150px] md:h-[350px] object-cover object-center" alt="" onclick="openModal('img/servmec4.jpg')">
            </div>

        </div>
    </div> --}}
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-16 font-montserrat">
        <div class="flex flex-col lg:flex-row">
            <div class="flex-auto px-4 w-full lg:w-1/4 order-3 lg:order-1"> <!-- Updated order for small screens -->
                <h2 class="half-border text-[19px] font-semibold pb-2 leading-none tracking-normal">Browse Services</h2>
                <ul class="pt-4 font-roboto text-[15px] tracking-normal font-normal">
                    <li class="border-b-2 border-bordertrans py-2 my-1">
                        <a class="hover:text-orangenav  delay-50 duration-300" href="eng">Engineering</a>
                    </li>
                    <li class="border-b-2 border-bordertrans py-2 my-1">
                        <a class="text-orangenav" href="cons">Construction</a>
                    </li>
                </ul>
            </div>
            <div class="flex-auto px-4 w-auto lg:w-3/4 order-1 lg:order-2"> <!-- Updated order for small screens -->
                <div>
                    <p href="" class="text-[14px] leading-7 font-normal pb-4 tracking-wide lg:text-[17px]">LEARN MORE</p>
                    <h1 class="half-border text-[20px] font-semibold leading-10 mb-9 pb-5 tracking-normal md:text-[27px] lg:text-[40px]">Our Construction</h1>
                    <p class="py-4 text-[15px] leading-7 font-normal tracking-wider font-roboto mb-11">
                        Dedicated to providing a wide array of comprehensive construction services tailored to meet your exact needs, we are committed to ensuring excellence and efficiency every step of the way, from the initial blueprint stage through to the meticulous completion of your project.
                    </p>
                </div>
                <div>
                    <div class="grid grid-cols-2 grid-rows-2 gap-1 pb-10">
                        <div class="group cursor-pointer">
                            <img src="img/servmec1a.jpg" class="w-full h-[150px] md:h-[350px] object-cover object-center" alt="" onclick="openModal('img/servmec1a.jpg')">
                        </div>
                        <div class="group cursor-pointer">
                            <img src="img/servmec2a.jpg" class="w-full h-[150px] md:h-[350px] object-cover object-center" alt="" onclick="openModal('img/servmec2a.jpg')">
                        </div>
                        <div class="group cursor-pointer">
                            <img src="img/servmec3.jpg" class="w-full h-[150px] md:h-[350px] object-cover object-center" alt="" onclick="openModal('img/servmec3.jpg')">
                        </div>
                        <div class="group cursor-pointer">
                            <img src="img/servmec4.jpg" class="w-full h-[150px] md:h-[350px] object-cover object-center" alt="" onclick="openModal('img/servmec4.jpg')">
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

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
  width: 30%; /* Adjust this value to control the width of the border */
  border-bottom: 4px solid  #EE780A; /* Adjust the color and style as needed */
}
</style>
