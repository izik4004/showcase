
@extends('layouts.app')

@section('content')

    
<div class="max-w-6xl mx-auto h-1/2 mt-2">
    <div class="py-2 px-4 bg-white">
    
        <div class="flex flex-row items-center justify-end pt-4">
            <a href="{{ route('startup.index') }}"><button type="submit" class="bg-black text-white px-4 py-2 rounded">Back</button></a>
    </div>
 
    <div class="w-4/5 m-auto pt-8">
        <h1 class="text-6xl font-medium mt-4 mb-8">{{ $post->title  }}</h1>
        <span class="text-gray-500">
       By <span class="font-bold italic text-gray-800">
            {{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime ($post->updated_at)) }}
        </span>
        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {{ $post->description }}
        </p>

        <div>
            @comments(['model' => $post])
        </div>
    </div>
    
    
       
</div>

</div>
@endsection