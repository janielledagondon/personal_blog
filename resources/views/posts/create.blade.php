@extends('layouts.app')

@section('content')
   <div class="bg-gray-50 h-full md:grid md:grid-cols-12">
      <div class="py-16 px-4 md:px-0 md:col-start-4 md:col-span-6">
         <h2 class="text-4xl leading-10 tracking-tight font-bold text-gray-900 text-center">New Post</h2>
         <div class="bg-white shadow-sm mt-5 p-6 rounded-md">
            <form action="/home" method="post" class="mb-0">
               @csrf
               <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
               <input type="text" name="title" class="mt-1 py-2 px-3 block w-full border border-gray-400 rounded-md shadown-sm" autofocus>

               <label for="content" class="mt-6 block text-sm font-medium text-gray-700">Content</label>
               <textarea name="content" class="mt-1 py-2 px-3 block w-full border border-gray-400 rounded-md shadow-sm"></textarea>

               @if($errors->any())
                  <div class="mt-6">
                     <ul class="bg-red-100 px-4 py-5 rounded-md">
                        @foreach($errors->all() as $error)
                           <li>{{ $error }}</li>
                        @endforeach
                     </ul>
                  </div>
               @endif

            <div class="mt-3">
               <button class="bg-green-500 tracking-wide text-white px-5 py-3 inline-block mx-auto shadow-lg rounded hover:shadow hover:bg-green-600">Save</button>
               <a href="/home" class="bg-gray-500 tracking-wide text-white px-5 py-3 inline-block mx-auto shadow-lg rounded hover:shadow">Cancel</a>
            </div>               
            </form>
         </div>
      </div>
   </div>
@endsection