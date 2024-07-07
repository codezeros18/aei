@extends('layout.main')
@section('content')
<div class="h-[20rem] sm:h-[18rem] md:h-[20rem] lg:h-[24rem] bg-cover bg-bottom" style="background-image: url({{ url('img/servmec2b.jpg') }})">
    <div class="relative isolate px-6 pt-9 lg:px-8">
        <div class="mx-auto max-w-1xl py-16 sm:py-21 lg:py-32 lg:px-2 lg:mx-40 md:mx-20 md:py-20 sm:mx-0 font-montserrat">
        <div class="text-left">
            <div class="flex gap-x-2">
                <a href="home" class="text-[14px] leading-[3rem] font-normal text-white tracking-wide lg:text-[17px] hover:text-orangenav  delay-50 duration-300">HOME /</a>
                <a href="enco" class="text-[14px] leading-[3rem] font-normal text-white tracking-wide lg:text-[17px] hover:text-orangenav  delay-50 duration-300">ENCO</a>
            </div>
            <h1 class="text-[20px] font-semibold leading-none pb-9 text-white tracking-normal md:text-[27px] lg:text-[40px]">Engineering & Construction</h1>
            <p class="text-[15px] leading-6 font-normal text-white md:text-[15px] lg:text-[18px] tracking-tight font-roboto">
                "Meet our esteemed team member, a beacon of greatness and pride, whose dedication and expertise drive our success to new heights."</p>
        </div>
      </div>
    </div>
</div>

<div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-16 font-montserrat">
    <div class="flex flex-col lg:flex-row">
        <div class="flex-auto px-4 w-auto lg:w-96 order-1 lg:order-1"> <!-- Updated order for small screens -->
            <div class="pb-10">
                <img src="img/aboutus1c.jpg" class="h-[200px] sm:h-[320px] w-full md:h-[400px] lg:h-[480px] bg-cover pb-4">
                <h2 class="text-[14px] py-4 font-normal tracking-wide lg:text-[16px]">Engineer</h2>
                <h1 class="half-border text-[18px] font-semibold pb-4 leading-[3.25rem] tracking-normal md:text-[23px] lg:text-[40px]">Engineering</h1>
                <p class="py-4 text-[15px] leading-7 font-normal tracking-normal font-roboto">Explore the captivating world of our engineers, where creativity meets technical expertise to craft digital wonders beyond imagination. Dive into innovation as our diverse team harnesses cutting-edge tech, shaping tomorrow's digital frontier. Join us..</p>
                <div class="mt-2 mb-8">
                    <a href="eng" class="rounded-sm bg-p-600 px-8 py-2.5 text-[10px] font-bold hover:text-orangenav hover:bg-white bg-orangenav text-white transition delay-50 duration-300">CONTINUE READING</a>
                </div>
            </div>
            <div>
                <img src="img/servmec2a.jpg" class="h-[200px] sm:h-[320px] w-full md:h-[400px] lg:h-[480px] pb-4" alt="">
                <h2 class="text-[14px] py-4 font-normal tracking-wide lg:text-[16px]">Construction</h2>
                <h1 class="half-border text-[18px] font-semibold pb-4 leading-[3.25rem] tracking-normal md:text-[23px] lg:text-[40px]">Construction</h1>
                <p class="py-4 text-[15px] leading-7 font-normal tracking-normal font-roboto">
                    Dedicated to providing a wide array of comprehensive construction services tailored to meet your exact needs, we are committed to ensuring excellence and efficiency every step of the way, from the initial blueprint stage..</p>
                <div class="mt-2 mb-8">
                    <a href="cons" class="rounded-sm bg-p-600 px-8 py-2.5 text-[10px] font-bold hover:text-orangenav hover:bg-white bg-orangenav text-white transition delay-50 duration-300">CONTINUE READING</a>
                </div>
            </div>
        </div>
        <div class="flex-auto px-4 w-full lg:w-6 order-2 lg:order-2"> <!-- Updated order for small screens -->
            <h2 class="half-border text-[19px] font-semibold pb-2 leading-none tracking-normal">Browse Posts</h2>
            <ul class="pt-4 font-roboto text-[15px] tracking-normal font-normal">

            </ul>
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
