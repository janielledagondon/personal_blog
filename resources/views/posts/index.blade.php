@extends('layouts.app')

@section('content')
<!-- blog_demo -->
<div class="container max-w-full mx-auto">   
   <div class="text-center">
      <h2 class="text-5xl leading-10 my-12 font-bold mb-4 text-gray-900 tracking-tight">My Diary</h2>
   </div>
   <div style="max-width: 150px;" class="grid mx-auto text-center">
         <a href="/home/create" class="bg-green-500 tracking-tight text-white px-5 py-3 mb-3 shadow-lg rounded hover:shadow hover:bg-green-600 my-4">Add post</a>
   </div>      
   <!-- blog_demo -->
   <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
      <div class="mt-2 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
         @foreach($posts as $post)
         <!-- Post -->
         <div class="flex flex-col rounded-lg shadow-lg overflow-hidden bg-white">
            <!-- Header -->
            <div class="flex-shrink-0">
               <img class="h-48 w-full object-cover" src="https://cdn.pixabay.com/photo/2016/02/22/12/27/note-pad-1215423_960_720.jpg" alt="Blog image">
            </div>
            <!-- Content -->
            <div class="flex-1 p-6 flex flex-col justify-between">
               <div class="flex-1">
                  <a href="/home/{{ $post->id }}">
                     <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">{{ $post->title }}</h3>
                  </a>
                  <p class="mt-3 text-base leading-6 text-gray-500 text-justify">
                     @if (strlen($post->content > 200))
                        {{ substr($post->content, 0, 200) }}...
                     @else
                        {{ $post->content }}
                     @endif
                  </p>
                  </div>

                  <div class="mt-6 flex items-center">
                     <!-- author avatar -->
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
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
@endsection