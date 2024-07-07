@extends('layout.main')
@section('content')
<div class="h-[20rem] sm:h-[18rem] md:h-[20rem] lg:h-[24rem] bg-cover bg-bottom" style="background-image: url({{ url('img/servmec2b.jpg') }})">
    <div class="relative isolate px-6 pt-9 lg:px-8">
        <div class="mx-auto max-w-1xl py-16 sm:py-21 lg:py-32 lg:px-2 lg:mx-40 md:mx-20 md:py-20 sm:mx-0 font-montserrat">
        <div class="text-left">
            <div class="flex gap-x-2">
                <a href="home" class="text-[14px] leading-[3rem] font-normal text-white tracking-wide lg:text-[17px] hover:text-orangenav  delay-50 duration-300">HOME /</a>
                <a href="mase" class="text-[14px] leading-[3rem] font-normal text-white tracking-wide lg:text-[17px] hover:text-orangenav  delay-50 duration-300">MAINTENANCE</a>
            </div>
            <h1 class="text-[20px] font-semibold leading-none pb-9 text-white tracking-normal md:text-[27px] lg:text-[40px]">Maintenance & Services</h1>
            <p class="text-[15px] leading-6 font-normal text-white md:text-[15px] lg:text-[18px] tracking-tight font-roboto">
                Regular maintenance and timely services are crucial to ensuring the longevity and optimal performance of our equipment.</p>
        </div>
      </div>
    </div>
</div>
    {{-- <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-20 font-montserrat">
        <div class="text-left">
            <p href="" class="text-[14px] leading-7 font-normal pb-4 tracking-wide lg:text-[17px]">LEARN MORE</p>
            <h1 class="half-border text-[20px] font-semibold leading-10 mb-9 pb-5 tracking-normal md:text-[27px] lg:text-[40px]">Maintenance & Services</h1>
        </div>
        <div class="grid grid-cols-4 grid-rows-1">
            <!-- Gambar pertama, 2 kolom -->
             <div class="col-span-2 row-span-2 group cursor-pointer">
                <img src="img/main1.jpeg" class="w-full h-48 md:h-96 object-cover object-center" alt="Gambar Pertama" onclick="openModal('img/main1.jpeg')">
            </div>

            <!-- Gambar kedua dan ketiga, 1 kolom -->
            <div class="col-span-1 group cursor-pointer">
              <img src="img/main2.jpeg" class="h-24 md:h-48 object-cover object-center" alt="Gambar Kedua" onclick="openModal('img/main2.jpeg')"">
            </div>
            <div class="col-span-1 group cursor-pointer">
              <img src="img/main3.jpeg" class="h-24 md:h-48 object-cover object-center" alt="Gambar Ketiga" onclick="openModal('img/main3.jpeg')"">
            </div>

            <!-- Gambar keempat, 1 kolom -->
            <div class="col-span-1 group cursor-pointer">
              <img src="img/main4.jpeg" class="h-24 md:h-48 object-cover object-center" alt="Gambar Keempat" onclick="openModal('img/main4.jpeg')"">
            </div>
            <div class="col-span-1 group cursor-pointer">
                <img src="img/main5.jpeg" class="h-24 md:h-48 object-cover object-center"  alt="Gambar Keempat" onclick="openModal('img/main5.jpeg')"">
            </div>
        </div>
    </div> --}}
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-16 font-montserrat">
        <div class="flex flex-col lg:flex-row">
            <div class="flex-auto px-4 w-full lg:w-1/4 order-3 lg:order-1"> <!-- Updated order for small screens -->
                <h2 class="half-border text-[19px] font-semibold pb-2 leading-none tracking-normal">Browse Services</h2>
                <ul class="pt-4 font-roboto text-[15px] tracking-normal font-normal">
                    <li class="border-b-2 border-bordertrans py-2 my-1">
                        <a class="text-orangenav" href="mase">Maintenance</a>
                    </li>
                    <li class="border-b-2 border-bordertrans py-2 my-1">
                        <a class="hover:text-orangenav  delay-50 duration-300" href="spar">Spareparts</a>
                    </li>
                </ul>
            </div>
            <div class="flex-auto px-4 w-auto lg:w-3/4 order-1 lg:order-2"> <!-- Updated order for small screens -->
                <div>
                    <p href="" class="text-[14px] leading-7 font-normal pb-4 tracking-wide lg:text-[17px]">LEARN MORE</p>
                    <h1 class="half-border text-[20px] font-semibold leading-10 mb-9 pb-5 tracking-normal md:text-[27px] lg:text-[40px]">Our Maintenance</h1>
                    <p class="py-4 text-[15px] leading-7 font-normal tracking-wider font-roboto mb-11">
                        Regular maintenance and timely services are crucial to ensuring the longevity and optimal performance of our equipment.
                    </p>
                </div>
                <div>
                <div class="grid grid-cols-4 grid-rows-1 gap-1 pb-10">
                        <!-- Gambar pertama, 2 kolom -->
                        <div class="col-span-2 row-span-2 group cursor-pointer" >
                          <img src="img/main1.jpeg" class="w-full h-96 object-cover object-center" alt="Gambar Pertama" onclick="openModal('img/main1.jpeg')"">
                        </div>

                        <!-- Gambar kedua dan ketiga, 1 kolom -->
                        <div class="col-span-1 group cursor-pointer">
                          <img src="img/main2.jpeg" class="w-full h-48 object-cover object-center" alt="Gambar Kedua" onclick="openModal('img/main2.jpeg')"">
                        </div>
                        <div class="col-span-1 group cursor-pointer">
                          <img src="img/main3.jpeg" class="w-full h-48 object-cover object-center" alt="Gambar Ketiga" onclick="openModal('img/main3.jpeg')"">
                        </div>

                        <!-- Gambar keempat, 1 kolom -->
                        <div class="col-span-1 group cursor-pointer">
                          <img src="img/main4.jpeg" class="w-full h-48 object-cover object-center" alt="Gambar Keempat" onclick="openModal('img/main4.jpeg')"">
                        </div>
                        <div class="col-span-1 group cursor-pointer">
                            <img src="img/main5.jpeg" class="w-full h-48 object-cover object-center"  alt="Gambar Keempat" onclick="openModal('img/main5.jpeg')"">
                          </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
{{-- <div class="h-[5rem] sm:h-[5rem] md:h-[5rem] lg:h-[5rem] bg-cover bg-blacknav2">
    <div class="mx-auto max-w-1xl py-1 px-4 sm:py-21 lg:py-4 lg:px-10 lg:mx-40 md:py-30 sm:mx-0 font-montserrat">
      <div class="flex flex-row">
        <div class="flex-1 w-64 py-3 text-left">
          <h1 class="text-[10px] sm:text-[11px] font-bold leading-6 pb-9 text-white tracking-normal md:text-[18px]">Looking for a First-Class Scientific Partner?</h1>
        </div>
        <div class="flex-1 w-32 py-8  md:py-6 lg:py-3 text-right">
                <a href="#" class="rounded-sm bg-p-600 px-11 py-2.5  md:px-14 md:py-3.5 text-[7px] sm:text-[8px] md:text-[13px] font-normal text-white bg-orangenav hover:bg-transparent hover:border hover:text-orangenav hover:border-orangenav delay-50 duration-300">CONTACT US</a>
        </div>
      </div>
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
  width: 30%; /* Adjust this value to control the width of the border */
  border-bottom: 4px solid  #EE780A; /* Adjust the color and style as needed */
}
</style>
