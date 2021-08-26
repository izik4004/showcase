@extends('layouts.app')

@section('content')
    <div class="">
            <div class="bg-gray-100  flex flex-row ">
                <div class="lg:2/6 xl:w-2/4  text-left mb-4  py-12">
                  <div class="text-6xl font-semibold text-gray-900 leading-none text-center mt-4">Looking for <span class="text-indigo-500">startups</span> to invest in?</div>
                  <div class="mt-8 text-xl font-light text-true-gray-500 antialiased">Our goal is to create a seamless connection between StartUps and Investors, by showcasing your startup ideas to a large audience of investors</div>
                   <!---- <p class="mt-4 text-4xl font-semibold text-true-gray-500 antialiased">Do you have a start-up to showcase?</p> ----->
                <!--   <a href="{{ route('startup.index') }}"> <button class="mt-4  px-3 py-2 rounded-lg tracking-wide border border-indigo-500 bg-indigo-500 hover:bg-white hover:text-indigo-700 text-white text-base font-semibold outline-none focus:outline-none hover:shadow-sm">
                   View Startups
                  </button></a>--->
                  <button class="mt-4 px-3 py-2 rounded-lg tracking-wide bg-white border border-indigo-700 hover:bg-indigo-700 hover:text-white text-indigo-700 text-lg font-bold outline-none focus:outline-none hover:shadow-sm">
                      Contact us
                  </button>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 ">
                  <img class="object-cover object-center rounded" alt="hero" src="./svg/example-scene-2.svg">
                </div>
            </div>

            <div class="px-0 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    
    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      <span class="relative inline-block">
        <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
          <defs>
            <pattern id="84d09fa9-a544-44bd-88b2-08fdf4cddd38" x="0" y="0" width=".135" height=".30">
              <circle cx="1" cy="1" r=".7"></circle>
            </pattern>
          </defs>
          <rect fill="url(#84d09fa9-a544-44bd-88b2-08fdf4cddd38)" width="52" height="24"></rect>
        </svg>
        <span class="relative">Let's</span>
      </span>
      showcase your startup
    </h2>
    
  </div>
  <div class="grid gap-8 row-gap-5 md:row-gap-8 lg:grid-cols-3">
    <div class="p-5 duration-300 transform bg-white border-2 border-dashed rounded shadow-sm border-indigo-100 hover:-translate-y-2">
      <div class="flex items-center mb-2">
        <p class="flex items-center justify-center w-10 h-10 mr-2 text-lg font-bold text-white rounded-full bg-indigo-400">
          1
        </p>
        <p class="text-lg font-bold leading-5">Register</p>
      </div>
      <p class="text-sm text-gray-900">
        Sign up to be able to participate and showcase you start up idea, it totally free
      </p>
    </div>
    <div class="p-5 duration-300 transform bg-white border-2 border-dashed rounded shadow-sm border-indigo-200 hover:-translate-y-2">
      <div class="flex items-center mb-2">
        <p class="flex items-center justify-center w-10 h-10 mr-2 text-lg font-bold text-white rounded-full bg-indigo-400">
          2
        </p>
        <p class="text-lg font-bold leading-5">Add Your Startup</p>
      </div>
      <p class="text-sm text-gray-900">
        Upload your startup with detailed description and what problem it solves
      </p>
    </div>
    <div class="relative p-5 duration-300 transform bg-white border-2 rounded shadow-sm border-indigo-700 hover:-translate-y-2">
      <div class="flex items-center mb-2">
        <p class="flex items-center justify-center w-10 h-10 mr-2 text-lg font-bold text-white rounded-full bg-indigo-400">
          3
        </p>
        <p class="text-lg font-bold leading-5">Get Votes to Rank</p>
      </div>
      <p class="text-sm text-gray-900">
        Rank higher by getting more votes to be amongst the top startups
      </p>
      <p class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 -mt-4 -mr-4 font-bold rounded-full bg-indigo-400 sm:-mt-5 sm:-mr-5 sm:w-10 sm:h-10">
        <svg class="text-white w-7" stroke="currentColor" viewBox="0 0 24 24">
          <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6,12 10,16 18,8"></polyline>
        </svg>
      </p>
    </div>
  </div>
</div>
            
        

@endsection