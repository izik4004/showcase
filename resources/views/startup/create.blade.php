
@extends('layouts.app')

@section('content')

    
<div class="max-w-6xl mx-auto h-1/2 mt-4">
    <div class="py-2 px-4 bg-white">
    <h1 class="text-3xl font-medium mt-4">Add Your Startup Details</h1>
    
    <div class="flex flex-row items-center justify-end">
        <button type="submit" class="bg-black text-white px-4 py-2 rounded">Back</button>
    </div>
 
@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="/startup" method="POST" enctype="multipart/form-data">
        @csrf 
    
     <!-- component -->
<div class="w-full ">
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
          Title
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="title" id="title" type="text">
        <p class="text-gray-600 text-xs italic">Remove if not needed</p>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="category">
          Category
        </label>
             <select
                class="form-control block w-full px-4 py-2 mb-3 bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-white focus:ring-0" id="category" name="category">
                <option value="">Select Category</option>
                <option value="Fintech">Fintech</option>
                <option value="Ecommerce">Ecommerce</option>
                <option value="Health">Health</option>
                <option value="Agriculture">Agric</option>
                <option value="Others">Others</option>
            </select>
         </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="tag">
                Tag
              </label>
            <select
                class="block w-full px-4 py-2 bg-gray-100 border-transparent rounded-lg focus:border-gray-500 focus:bg-white focus:ring-0" id="tag" name="tag">
                <option value="">Select Tag</option>
                <option value="Web App">Web App</option>
                <option value="Mobile App">Mobile App</option>
                <option value="Web & Mobile">Web & Mobile</option>
                <option value="Web & Mobile">Figma Design</option>
                <option value="Web & Mobile">Others</option>
            </select>
        </label>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">
          Description
        </label>
        <textarea class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="description" name="description"></textarea>
        <p class="text-gray-600 text-xs italic">Re-size can be disabled by set by resize-none / resize-y / resize-x / resize</p>
      </div>
    </div>
    
        
        <div class="mt-8">
            <label for="image" class="mt-12">
            <input type="file" id="img" name="image" accept="image/*">
        </div>
    
    <div class="md:flex md:items-center mt-4">
      <div class="md:w-1/3">
        <button class="shadow bg-teal-400 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
          Submit
        </button>
      </div>
      <div class="md:w-2/3"></div>
    </div>
</div>
</form>
       
</div>

</div>
@endsection