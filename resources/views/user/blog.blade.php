{{-- in layouts folder, mainStructure file has user navigation bar and footer --}}
@extends('layouts/mainStructure')

@section('content')
      <div class="text-center">
        <h2>Sri Lanka Tours Blogs</h2>
        <pre>Dive into Our Blog for Captivating Tales, Local Wisdom, and Travel Inspiration</pre>  
      </div>

      {{-- All blog post --}}
      @include('components.user-components.home-blog')
     
@endsection