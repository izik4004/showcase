@extends('layouts.app')

@section('content')
    <div class="">
            <div class="flex flex-row bg-gray-100 ">
                <div class="py-12 mb-4 text-left lg:2/6 xl:w-2/4">
                  <div class="mt-4 text-6xl font-semibold leading-none text-center text-gray-900">Looking for <span class="text-indigo-500">startups</span> to invest in?</div>
                  <div class="mt-8 text-xl antialiased font-light text-true-gray-500">Our goal is to create a seamless connection between StartUps and Investors, by showcasing your startup ideas to a large audience of investors</div>
                   <!---- <p class="mt-4 text-4xl antialiased font-semibold text-true-gray-500">Do you have a start-up to showcase?</p> ----->
                <!--   <a href="{{ route('startup.index') }}"> <button class="px-3 py-2 mt-4 text-base font-semibold tracking-wide text-white bg-indigo-500 border border-indigo-500 rounded-lg outline-none hover:bg-white hover:text-indigo-700 focus:outline-none hover:shadow-sm">
                   View Startups
                  </button></a>--->
                  <button class="px-3 py-2 mt-4 text-lg font-bold tracking-wide text-indigo-700 bg-white border border-indigo-700 rounded-lg outline-none hover:bg-indigo-700 hover:text-white focus:outline-none hover:shadow-sm">
                      Contact us
                  </button>
                </div>
                <div class="w-5/6 lg:max-w-lg lg:w-full md:w-1/2 ">
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
        <span class="relative">Join us</span>
      </span>
      and showcase your startup
    </h2>
    
  </div>
  <div class="grid gap-8 row-gap-5 md:row-gap-8 lg:grid-cols-3">
    <div class="p-5 duration-300 transform bg-white border-2 border-indigo-100 border-dashed rounded shadow-sm hover:-translate-y-2">
      <div class="flex items-center mb-2">
        <p class="flex items-center justify-center w-10 h-10 mr-2 text-lg font-bold text-white bg-indigo-400 rounded-full">
          1
        </p>
        <p class="text-lg font-bold leading-5">Register</p>
      </div>
      <p class="text-sm text-gray-900">
        Sign up to be able to participate and showcase you start up idea, it totally free
      </p>
    </div>
    <div class="p-5 duration-300 transform bg-white border-2 border-indigo-200 border-dashed rounded shadow-sm hover:-translate-y-2">
      <div class="flex items-center mb-2">
        <p class="flex items-center justify-center w-10 h-10 mr-2 text-lg font-bold text-white bg-indigo-400 rounded-full">
          2
        </p>
        <p class="text-lg font-bold leading-5">Add Your Startup</p>
      </div>
      <p class="text-sm text-gray-900">
        Upload your startup with detailed description and what problem it solves
      </p>
    </div>
    <div class="relative p-5 duration-300 transform bg-white border-2 border-indigo-700 rounded shadow-sm hover:-translate-y-2">
      <div class="flex items-center mb-2">
        <p class="flex items-center justify-center w-10 h-10 mr-2 text-lg font-bold text-white bg-indigo-400 rounded-full">
          3
        </p>
        <p class="text-lg font-bold leading-5">Get Votes to Rank</p>
      </div>
      <p class="text-sm text-gray-900">
        Rank higher by getting more votes to be amongst the top startups
      </p>
      <p class="absolute top-0 right-0 flex items-center justify-center w-8 h-8 -mt-4 -mr-4 font-bold bg-indigo-400 rounded-full sm:-mt-5 sm:-mr-5 sm:w-10 sm:h-10">
        <svg class="text-white w-7" stroke="currentColor" viewBox="0 0 24 24">
          <polyline fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6,12 10,16 18,8"></polyline>
        </svg>
      </p>
    </div>
  </div>
</div>
            
        


<div class="px-6 py-8 pt-28">
  <div class="container flex justify-between mx-auto">
      <div class="w-full lg:w-8/12">
          <div class="flex items-center justify-between">
              <h1 class="text-xl font-bold text-gray-700 md:text-2xl">Today</h1>
              <div>
                  <select class="w-full p-2 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                      <option>Latest</option>
                      <option>This Past Week</option>
                      <option>This Past Month</option>
                      <option>This Past Year</option>
                      <option>All Time</option>
                  </select>
              </div>
          </div>
         
             @if (session()->has('message')) 
                  <div class="w-full pl-2 m-auto mt-18">
                      <p class="w-1/2 py-4 pl-4 mt-4 mb-4 bg-green-500 rounded-lg text-gray-50">
                      {{ session()->get('message') }}
                      </p>
                  </div>
             @endif
         
            
             <!-- component -->
<div class="flex items-center justify-center bg-gray-100 ">
  <!-- component -->
 
<div class="w-full py-6 mx-auto ">
      <div class="mb-4 ">
          @foreach ($posts as $post)
          
              <div class="w-full p-4 mb-4 bg-white border-l-4 border-purple-400 shadow">
                  <div class="grid grid-cols-6 gap-4 ">
                      <div class="w-20 col-span-1 col-start-1 mr-3 rounded-full icon">
                          <img src="{{ asset('images/' . $post->image_path) }}" class="rounded-md md:w-28 md:max-h-20"/>
                      </div>
                      <div class="col-start-2 col-end-4">
                          <div class="mt-0 text-lg"> <a href="/startup/{{ $post->slug }}">{{$post->title}} </a></div>
                          <div class="text-sm text-gray-400">{{$post->description}}</div>
                          {{-- <div class="flex flex-row ">
                              <span class="relative inline-block py-1 text-xs font-semibold text-red-500 bg-red-200 rounded-md ">{{ $post->category }}</span>
                          </div> --}}
                      </div>
                      <div class="flex flex-col content-center w-16 col-span-1 col-end-7 mx-auto border">
                          
                          <button class="flex items-center py-3 mx-auto">
                              <svg class="w-8 h-10 " xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 18 18"><path d="M9 6l-4 4h8z"/></svg>
                          </button>                
                          <span class="flex items-center mx-auto -mt-7">1</span>                           
                      </div>
                         
                          
                     
                  </div>
                  <div class="flex flex-row ml-16">
                      @if (isset(Auth::user()->id) && Auth::user()->id ==
                      $post->user_id)
                          <span class="float-right">
                              <a href="/startup/{{ $post->slug }}/edit"
                                  class="pb-1 mt-4 text-indigo-500 ml-14 "
                                  >Edit
                              
                              </a>
                          </span>
      
                          <span class="ml-2">
                              <form action="/startup/{{ $post->slug }}" method="post">
                              @csrf
                              @method('delete')
      
                              <button
                                  class="pr-3 text-red-500" type="submit">
                                  Delete
                              </button>
                              </form>
                          </span>
                      @endif
                  </div>
                  
              </div>
              
        
          @endforeach
          

         

      </div>
  </div> 
</div>


  
        
            

</div>
<div class="hidden w-4/12 -mx-8 lg:block">
<div class="px-8">
  <h1 class="mb-4 text-xl font-bold text-gray-700">Top Ranking Product</h1>
  <div class="flex flex-col max-w-sm px-6 py-4 mx-auto bg-white rounded-lg shadow-md">
      <p>No Data available at the Moment</p>
  </div>
</div>
<div class="px-8 mt-10">
  <h1 class="mb-4 text-xl font-bold text-gray-700">Categories</h1>
  <div class="flex flex-col max-w-sm px-4 py-6 mx-auto bg-white rounded-lg shadow-md">
      @foreach ($posts as $post )
      <ul>
          <li class="mt-2"><a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
              {{ $post->category }}</a></li>
         
      </ul>    
          @endforeach
          
          
  </div>
</div>
<div class="px-8 mt-10">
  <h1 class="mb-4 text-xl font-bold text-gray-700">Recent Post</h1>
  <div class="flex flex-col max-w-sm px-8 py-6 mx-auto bg-white rounded-lg shadow-md">
      <div class="flex items-center justify-center"><a href="#"
              class="px-2 py-1 text-sm text-green-100 bg-gray-600 rounded hover:bg-gray-500">Laravel</a>
      </div>
      <div class="mt-4"><a href="#" class="text-lg font-medium text-gray-700 hover:underline">Build
              Your New Idea with Laravel Freamwork.</a></div>
      <div class="flex items-center justify-between mt-4">
          <div class="flex items-center"><img
                  src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                  alt="avatar" class="object-cover w-8 h-8 rounded-full"><a href="#"
                  class="mx-3 text-sm text-gray-700 hover:underline">Alex John</a></div><span
              class="text-sm font-light text-gray-600">Jun 1, 2020</span>
      </div>
  </div>
</div>
</div>
</div>
</div>
@endsection