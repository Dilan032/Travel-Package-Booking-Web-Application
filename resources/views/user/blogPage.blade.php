{{-- in layouts folder, mainStructure file has user navigation bar and footer --}}
@extends('layouts/mainStructure')

@section('content')

<div class="container mb-5"> 
      <div class="d-flex">
        {{-- back to package btn --}}
        <a href="{{ route('blog') }}">
          <img src="{{ asset('image/help-tools/home.svg') }}" width="40px" alt="home">
        </a>
        <p class="mt-3">Blog > {{ $blog->title}} </p>
      </div>
    
    {{-- blog title --}}
    <div class="text-center mt-1">
      <h2> {{ $blog->title}} </h2>
      <pre> {{ \carbon\carbon::parse($blog->created_at)->format('d M, Y') }} </pre>
    
      {{-- blog main section --}}
      <div class="row mt-5">
        <div class="col-2">
          {{-- <h6>recent blog posts </h6> --}}
        </div>

        <div class="col-8">
            {{-- image --}}
            @if ($blog-> image != "")
              <img src="{{ asset('image/uploads/blog/'.$blog-> image) }}" class="rounded  border rounded" alt="main image" width="100%">
            @else
              <img src="{{ asset('image/uploads/blog/empty-image.png') }}" class="rounded  border rounded" alt="main image">
            @endif
            <div class="text-justify ">
              <p class="mt-3 lh-lg" >
                {!! $blog->discription !!}
              </p> 
            </div> 
        </div>

        <div class="col-2">
        </div>
      
      </div>
    </div>
  </div>

@endsection