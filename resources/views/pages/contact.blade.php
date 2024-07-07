@extends('layout.main')
@section('content')
<div class="h-[20rem] sm:h-[18rem] md:h-[20rem] lg:h-[24rem] bg-cover bg-bottom" style="background-image: url({{ url('img/servmec2b.jpg') }})">
    <div class="relative isolate px-6 pt-9 lg:px-8">
      <div class="mx-auto max-w-1xl py-16 sm:py-21 lg:py-32 lg:px-2 lg:mx-40 md:mx-20 md:py-20 sm:mx-0 font-montserrat">
        <div class="text-left">
            <div class="flex gap-x-2">
                <a href="home" class="text-[14px] leading-[3rem] font-normal text-white tracking-wide lg:text-[17px] hover:text-orangenav  delay-50 duration-300">HOME /</a>
                <a href="contact" class="text-[14px] leading-[3rem] font-normal text-white tracking-wide lg:text-[17px] hover:text-orangenav  delay-50 duration-300">CONTACT</a>
            </div>
            <h1 class="text-[20px] font-semibold leading-none pb-9 text-white tracking-normal md:text-[27px] lg:text-[40px]">Contact Us</h1>
            <p class="text-[15px] leading-6 font-normal text-white md:text-[15px] lg:text-[18px] tracking-tight font-roboto">
                We’d love to hear from you! Whether you have a question, feedback, or need assistance</p>
        </div>
      </div>
    </div>
</div>
<div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-20 font-montserrat">
    <h2 class="text-[30px] px-10 flex justify-center font-semibold tracking-normal md:text-[35px] lg:text-[40px] text-center">
     Get In Touch</h2>
    <p class="text-3xl flex justify-center font-normal tracking-wide text-black my-2 mb-16">
        Let's talk about your project</p>
        <div class="flex flex-col lg:flex-row">
            <div class="flex-auto px-4 w-full lg:w-1/4 order-3 lg:order-1">
                <p class="text-[11px] leading-normal font-normal  md:text-[12px] lg:text-[15px] tracking-tight pb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="height:20px">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                    Jl. Geno Utomo No.25 Kel.Sumur Pacing Kec. Karawaci Kota Tangerang Banten – Indonesia 15114</p>
                <p class="text-[11px] leading-normal font-normal  md:text-[12px] lg:text-[15px] tracking-tight pb-4"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="height: 20px"">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z" />
                  </svg>
                  cs@anugrahenergiindonesia.com</p>
                <p class="text-[11px] leading-normal font-normal  md:text-[12px] lg:text-[15px] tracking-tight pb-4">                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="height:20px">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                  </svg>+ (021)22297103</p>
            </div>
            <div class="flex-auto px-4 w-auto lg:w-3/4 order-1 lg:order-2"> <!-- Updated order for small screens -->
                <div class="mx-auto w-full mb-10">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.657470095855!2d106.61570507475015!3d-6.176587993810819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ff2f69ca0d59%3A0xcfccae5b112107eb!2sJl.%20Geno%20Utomo%20No.25%2C%20RT.003%2FRW.002%2C%20Sumur%20Pacing%2C%20Kec.%20Karawaci%2C%20Kota%20Tangerang%2C%20Banten%2015114!5e0!3m2!1sen!2sid!4v1710825466117!5m2!1sen!2sid" class="w-full" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <form class="w-full mt-10">
            <div class="flex flex-wrap flex-col lg:flex-row -mx-3 mb-2 pt-4">
                <div class="w-full lg:w-1/3 px-3 mb-5 lg:mb-6">
                    <input class="appearance-none block w-full border-2 text-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" id="grid-phone-num" type="text" placeholder="Your name">
                </div>
                <div class="w-full lg:w-1/3 px-3 mb-5 lg:mb-6">
                    <input class="appearance-none block w-full border-2 text-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="number" placeholder="Your phone number">
                </div>
                <div class="w-full lg:w-1/3 px-3 mb-5 lg:mb-6">
                    <input class="appearance-none block w-full border-2 text-gray-700 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="email" placeholder="Your email">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <textarea class="appearance-none block w-full h-48  text-gray-700  border-2 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" placeholder="Your message" style="resize: none" maxlength="650"></textarea>
                </div>
            </div>
            <div class="mt-4 mb-20 px-3 text-end">
                <a href="eng" class="rounded-sm bg-p-600 px-14 py-4 text-[12px] font-bold hover:text-black hover:bg-white bg-orangenav text-white transition delay-50 duration-300">SUBMIT</a>
            </div>
        </form>
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
