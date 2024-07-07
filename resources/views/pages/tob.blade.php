@extends('layout.main')
@section('content')
<div class="h-[20rem] sm:h-[18rem] md:h-[20rem] lg:h-[24rem] bg-cover bg-bottom" style="background-image: url({{ url('img/servmec2b.jpg') }})">
    <div class="relative isolate px-6 pt-9 lg:px-8">
      <div class="mx-auto max-w-1xl py-16 sm:py-21 lg:py-32 lg:px-2 lg:mx-40 md:mx-20 md:py-20 sm:mx-0 font-montserrat">
        <div class="text-left">
            <div class="flex gap-x-2">
                <a href="home" class="text-[14px] leading-[3rem] font-normal text-white tracking-wide lg:text-[17px] hover:text-orangenav  delay-50 duration-300">HOME /</a>
                <a href="tob" class="text-[14px] leading-[3rem] font-normal text-white tracking-wide lg:text-[17px] hover:text-orangenav  delay-50 duration-300">TOB</a>
            </div>
            <h1 class="text-[20px] font-semibold leading-none pb-9 text-white tracking-normal md:text-[27px] lg:text-[40px]">Thermal Oil Boiler</h1>
            <p class="text-[15px] leading-6 font-normal text-white md:text-[15px] lg:text-[18px] tracking-tight font-roboto">
                A thermal oil boiler fires through a helical coil and generates energy from the hot products of combustion.</p>
        </div>
      </div>
    </div>
</div>
<div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-16 font-montserrat">
    <div class="flex flex-col lg:flex-row">
        <div class="flex-auto px-4 w-full lg:w-6 order-3 lg:order-1"> <!-- Updated order for small screens -->
            <h2 class="half-border text-[19px] font-semibold pb-2 leading-none tracking-normal">Browse Services</h2>
            <ul class="pt-4 font-roboto text-[15px] tracking-normal font-normal">
                <li class="border-b-2 border-bordertrans py-2 my-1">
                    <a class="hover:text-orangenav  delay-50 duration-300" href="fluidized">Fluidized Bed Boiler</a>
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
                    <a class="text-orangenav" href="tob">Thermal Oil Boiler </a>
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
                <h1 class="half-border text-[18px] font-semibold py-4 leading-[3.25rem] tracking-normal md:text-[23px] lg:text-[40px]">Thermal Oil Boiler</h1>
                <p class="py-4 text-[15px] leading-7 font-normal tracking-wider font-roboto">A thermal oil boiler fires through a helical coil and generates energy from the hot products of combustion. This, by heating the coil through radiation and convection. The coil heats the thermal oil or fluid that is pumped through the thermal oil boiler. The thermal oil heats coils in various types of heat users.</p>
                <p class="py-4 text-[15px] leading-7 font-normal tracking-wider font-roboto">A thermal oil is commonly used as a working fluid that circulate through the absorber tube and transform the solar irradiation into thermal energy and carries heat to heat exchangers or analogous for driving a Rankine steam turbine.</p>
                <p class="py-4 text-[15px] leading-7 font-normal tracking-wider font-roboto">The Rankine cycle is an idealized thermodynamic cycle describing the process by which certain heat engines, such as steam turbines or reciprocating steam engines, allow mechanical work to be extracted from a fluid as it moves between a heat source and heat sink.</p>
            </div>
        </div>
        <div class="flex-auto px-4 w-auto pb-10 lg:w-48 order-2 lg:order-3"> <!-- No need to change order for small screens -->
            <div class="justify-center text-center">
                <p class="py-4 text-[15px] leading-7 font-normal tracking-wider font-roboto">No Picture</p>
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
  width: 40%; /* Adjust this value to control the width of the border */
  border-bottom: 3px solid  #EE780A; /* Adjust the color and style as needed */
}
</style>
