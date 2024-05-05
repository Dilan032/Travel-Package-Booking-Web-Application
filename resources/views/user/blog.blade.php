{{-- in layouts folder, mainStructure file has user navigation bar and footer --}}
@extends('layouts/mainStructure')

@section('content')
      <div class="text-center">
        <h2>Sri Lanka Tours Blogs</h2>
        <pre>Dive into Our Blog for Captivating Tales, Local Wisdom, and Travel Inspiration</pre>  
      </div>

      <div class="container mt-5">
        <table class="table table-borderless mb-5">
            <tr>
              <td>
                <img src="{{ asset('image/blog-image/img1.svg') }}" alt="image 1"  class="object-fit-contain img-fluid">
              </td>
              <td>
                <img src="{{ asset('image/blog-image/img2.svg') }}" alt="image 2" class="object-fit-contain img-fluid">
              </td>
              <td>
                <img src="{{ asset('image/blog-image/img3.svg') }}" alt="image 3" class="object-fit-contain img-fluid">
              </td>
              <td>
                <img src="{{ asset('image/blog-image/img4.svg') }}" alt="image 4" class="object-fit-contain img-fluid">
              </td>
            </tr>
            <tr>
              <td>
                <a href="{{ route('blogPage') }}">
                  Exploring the Wonders of Sri Lanka
                </a>
              </td>
              <td>
                <a href="{{ route('blogPage') }}">
                  Exploring the Wonders of Sri Lanka
                </a>
              </td>
              <td>
                <a href="{{ route('blogPage') }}">
                  Exploring the Wonders of Sri Lanka
                </a>
              </td>
              <td>
                <a href="{{ route('blogPage') }}">
                  Exploring the Wonders of Sri Lanka
                </a>
              </td>
            </tr>
            <tr>
              <td> Dec 21, 2024 </td>
              <td> Dec 21, 2024 </td>
              <td> Dec 21, 2024 </td>
              <td> Dec 21, 2024 </td>
            </tr>
        </table>
      </div>
     
@endsection