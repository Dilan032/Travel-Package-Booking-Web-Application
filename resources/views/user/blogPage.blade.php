{{-- in layouts folder, mainStructure file has user navigation bar and footer --}}
@extends('layouts/mainStructure')

@section('content')

    <div class="container mb-5"> 

      {{-- blog nav bar --}}
      {{-- <nav class="blog-Breadcrumb-bg text-center" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('blog') }}">Bolg</a></li>
          <li class="breadcrumb-item active" aria-current="page">Bolg One</li>
        </ol>
      </nav> --}}

      {{-- back to blog btn --}}
      <a href="{{ route('blog') }}">
        <img src="{{ asset('image/help-tools/home.svg') }}" width="50px" alt="home">
      </a>
    
    {{-- blog title --}}
    <div class="text-center mt-5">
      <h2>Travel Sri Lanka with Tours: Exploring the Wonders of Sri Lanka</h2>
      <pre>Dec 15, 2024</pre>
    

    {{-- main image --}}
      <img src="{{ asset('image/blog-image/blog-page-image/image1.svg') }}" class="rounded object-fit-contain border rounded" alt="main image">
      <div class="text-justify ">
        <p class="mt-3 lh-lg" >
        
          Sigiriya, Sri Lanka, is a small town that has become famous because of one particular attraction – Sigiriya Rock. It’s easily one of the most amazing places to see in Sri Lanka.
          Although I loved my visit to the rock temple, there are so many other things to do in Sigiriya and nearby that I loved too!
          In fact, Sigirya became one of my favorite places in Sri Lanka. Not only are there three of Sri Lanka’s best national parks nearby, but the delicious food and friendly locals made it a trip to remember.
          I loved Sigiriya, and I discovered a side to the town that most people don’t about. With all of the exploring I did, I found 21 amazing things to do in Sigiriya (and only one of them involves climbing Sigiriya Rock.)
          So, if you want to explore the cultural center of Sri Lanka, then this list of places to visit in Sigiriya and things to do is a great place to start!
    
        </p> 
      </div>  

    {{-- second image --}}
     {{-- main image --}}
     <img src="{{ asset('image/blog-image/blog-page-image/image2.svg') }}" class=" mt-5 rounded object-fit-contain border rounded" alt="main image">
     <div class="text-justify">
       <p class="mt-3 lh-lg">
       
        As I said before, the main attraction in Sigiriya is Sigiriya Rock. This rock is huge and is really a sight to see if you ask me. From miles away you can spot Sigiriya Rock seemingly out of place as it protrudes high into the sky.
        King Kashyapa chose the rock back in 477 AD to be his new capital. He built the palace on Sigiriya Rock, and about halfway up, he also built an enormous lion used as a gateway. The entire structure is very impressive, and before climbing the rock, I recommend you visit the museum below to read up on the area.
        I myself compare Sigiriya Rock to places such as Machu Picchu simply because of the huge effort that was needed to construct such a large palace on a free-standing rock.
        It takes around 2 hours to climb Sigiriya Rock if you take your time and enjoy the views. However, some people do take longer, especially if you’re visiting during the hottest part of the day (there are 1,200 steps.) The entrance fee to Sigiriya Rock is $30 USD and includes a visit to the Sigiriya Museum.

       </p>
     </div>
    
    </div>
  </div>

@endsection