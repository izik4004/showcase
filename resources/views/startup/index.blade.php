@extends('layouts.app')

@section('content')

<style>
     .card-notify-year {
        position: absolute;
        left: 580px;
        top: 215px;
        background: white;
        border-radius: 5%;
        text-align: center;
        color: red;      
        font-size: 12px;      
        width: 70px;
        height: 30px;    
        padding: 5px;
        border: 1px solid red;
}
</style>


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
         
                            

                   
               
             

                                    
                    

                           
                     
                        
    
            
        
            
            <div class="mt-8">
                <div class="flex">
                    <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-500 bg-white rounded-md cursor-not-allowed">
                        previous
                    </a>
                
                    <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                        1
                    </a>
                
                    <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                        2
                    </a>
                
                    <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                        3
                    </a>
                
                    <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                        Next
                    </a>
                </div>
            </div>
        </div>
        <div class="hidden w-4/12 -mx-8 lg:block">
            <div class="px-8">
                <h1 class="mb-4 text-xl font-bold text-gray-700">Hiring Now</h1>
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