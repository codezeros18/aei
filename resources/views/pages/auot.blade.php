@extends('layout.main')
@section('content')
<div class="h-[20rem] sm:h-[18rem] md:h-[20rem] lg:h-[24rem] bg-cover bg-bottom" style="background-image: url({{ url('img/servmec2b.jpg') }})">
    <div class="relative isolate px-6 pt-9 lg:px-8">
      <div class="mx-auto max-w-1xl py-16 sm:py-21 lg:py-32 lg:px-2 lg:mx-40 md:mx-20 md:py-20 sm:mx-0 font-montserrat">
        <div class="text-left">
            <div class="flex gap-x-2">
                <a href="home" class="text-[14px] leading-[3rem] font-normal text-white tracking-wide lg:text-[17px] hover:text-orangenav  delay-50 duration-300">HOME /</a>
                <a href="auot" class="text-[14px] leading-[3rem] font-normal text-white tracking-wide lg:text-[17px] hover:text-orangenav  delay-50 duration-300">AUOT</a>
            </div>
            <h1 class="text-[20px] font-semibold leading-none pb-9 text-white tracking-normal md:text-[27px] lg:text-[40px]">Automation & IOT</h1>
            <p class="text-[15px] leading-6 font-normal text-white md:text-[15px] lg:text-[18px] tracking-tight font-roboto">
                The use of technology to perform tasks with minimal human intervention creates a more interconnected and intelligent environment</p>
        </div>
      </div>
    </div>
</div>
<div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-20 font-montserrat">
    <div class="grid grid-cols-1 lg:grid-cols-2 grid-rows-1">
        <div class="text-left order-2 lg:order-1">
            <p href="" class="text-[14px] leading-7 font-normal pb-4 tracking-wide lg:text-[17px] mt-5 md:mt-0">LEARN MORE</p>
            <h1 class="half-border text-[20px] font-semibold leading-10 mb-9 pb-5 tracking-normal md:text-[27px] lg:text-[40px]">Automation</h1>
            <p class="text-[14px] leading-7 font-normal mb-8 sm:max-w-none lg:max-w-[90%] md:text-[14px] lg:text-[15px] tracking-normal font-roboto">
                The use of technology to perform tasks with minimal human intervention. It involves the application of machines, control systems, and software to operate processes and systems efficiently..
            </p>
            <div class="mt-4 mb-20">
                <a href="aut" class="rounded-sm bg-p-600 px-8 py-2.5 text-[10px] font-bold hover:text-orangenav hover:bg-white bg-orangenav text-white transition delay-50 duration-300">CONTINUE READING</a>
            </div>
        </div>
        <div class="order-1 lg:order-2">
            <img src="img/au10a.jpg"  alt="Gambar Keempat">
        </div>
    </div>
    <div class="border-b-2 mt-20 mb-20">
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 grid-rows-1 gap-10">
        <div>
            <img src="img/au2.png"  alt="Gambar Keempat">
        </div>
        <div class="text-left order-4 lg:order-3">
            <p href="" class="text-[14px] leading-7 font-normal pb-4 tracking-wide lg:text-[17px] mt-5 md:mt-0">LEARN MORE</p>
            <h1 class="half-border text-[20px] font-semibold leading-10 mb-9 pb-5 tracking-normal md:text-[27px] lg:text-[40px]">IOT</h1>
            <p class="text-[14px] leading-7 font-normal mb-8 sm:max-w-none lg:max-w-[90%] md:text-[14px] lg:text-[15px] tracking-normal font-roboto">
                IOT aims to create a more interconnected and intelligent environment, enhancing the ability to monitor..
            </p>
            <div class="order-3 lg:order-4 mt-4 mb-20">
                <a href="iot" class="rounded-sm bg-p-600 px-8 py-2.5 text-[10px] font-bold hover:text-orangenav hover:bg-white bg-orangenav text-white transition delay-50 duration-300">CONTINUE READING</a>
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
