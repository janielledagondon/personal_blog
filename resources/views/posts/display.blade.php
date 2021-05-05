@extends('layouts.app')

@section('content')
<!-- blog_demo -->
   <div class="bg-gray-50 py-16 px-4 sm:grid sm:grid-cols-12">
      <div class="sm:col-start-4 sm:col-span-6">
      <div>
         <a href="/home" class="bg-orange-400 tracking-tight text-white px-5 py-3 shadow-lg rounded hover:shadow hover:bg-orange-500">Back to home</a> <a href="/home/{{$post->id}}/edit" class="bg-green-400 tracking-tight text-white px-5 mx-2 py-3 shadow-lg rounded hover:shadow hover:bg-green-500">Edit</a>
      </div>  
         <div class="bg-white mt-10 px-4 py-6 rounded-sm shadow-sm">
            <div class="flex items-center"> <!-- author section  -->
               <div class="flex-shrink-0"> 
                  <img class="h-12 w-12 rounded-full" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="avatar">
               </div>
               <div class="ml-3">
                  <!-- author name -->
                  <p class="text-sm leading-5 font-medium text-gray-900">Janielle</p>
                  <div class="flex text-sm leading-5 text-gray-500">
                     <time datetime="{{ $post->created_at }}">{{ $post->created_at->diffForHumans() }}</time>
                  </div>
               </div>
            </div>
            <!-- post section  -->
            <div class="mt-4 rounded-sm overflow-hidden">
               <img class="w-full object-cover" src="https://cdn.pixabay.com/photo/2016/02/22/12/27/note-pad-1215423_960_720.jpg" alt="Blog image">
            </div>
            <h2 class="mt-6 text-4xl leading-10 tracking-tight font-bold text-gray-900 text-center">{{ $post->title }}</h2>
            <p class="mt-6 leading-6 text-gray-700 text-justify">{{ $post->content }}</p>
         </div>
         <form action="/home/{{ $post->id }}" class="mt-5" method="post">
               @csrf
               @method('DELETE')

               <button class="bg-red-500 tracking-wide text-white px-5 py-3 inline-block mb-6 shadow-lg rounded hover:shadow hover:bg-red-600">Delete post</button>
         </form>
      </div>
   </div>

@endsection