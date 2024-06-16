{{-- in layouts folder, mainStructure file has user navigation bar and footer --}}
@extends('layouts/mainStructure')

@section('content')

      {{-- Home Image --}}
        <img src="{{ asset('image/sigiriya1.jpg') }}" height="750"  class="d-block w-100" style="margin-top: -120px"; alt="main image">
        {{-- Image Text --}}
            <div class="mainTextPosition text-center">
              <h5 class="mainTextSize">Explore Sri Lanka at Your Own Place</h5>
              <p>Where Every Road Becomes Your Story</p>
            </div>

        
        <pre class="text-center fs-3 mt-3">Wellcome To Sri Lanka🙏</pre>


        {{-- 4 Packages for home page --}}
        <div class="container mt-5">
            {{-- <div class="d-flex justify-content-between">
                <div>
                    <h3>Featured Day and Round Tours</h3>
                    <pre>Explore Sri Lanka's Gems in a Day</pre>
                </div>
                <div>
                    <button type="button" class="btn btn-primary">See All Tour Packages</button>
                </div>
            </div> 
        </div> --}}
            {{-- close container --}}

            
        {{-- Packages cart start --}}
        {{-- <div class="container mt-3">
            <table class="table table-borderless ">
                <tr>
                    <td> 
                        <a href="your_destination_page_url" class="no-decoration">
                            <div class="card d-inline-flex p-1" style="width: 18rem;">
                                <img src="{{ asset('image/cart_image1.png') }}" class="card-img-top object-fit-fill" alt="...">
                                    <div class="card-body">
                                        <p>time . category</p>
                                        <h5 class="card-title">Day Tour to Kandy</h5>
                                        <p class="card-text">Explore the Rich Heritage of Kandy with a Visit to Pinnawala Elephant Orphanage</p>
                                    </div>

                            </div>
                        </a>
                    </td>

                    <td>            
                        <a href="your_destination_page_url" class="no-decoration">
                            <div class="card d-inline-flex p-1" style="width: 18rem;">
                                <img src="{{ asset('image/cart_image1.png') }}" class="card-img-top object-fit-fill" alt="...">
                                    <div class="card-body">
                                        <p>time . category</p>
                                        <h5 class="card-title">Day Tour to Kandy</h5>
                                        <p class="card-text">Explore the Rich Heritage of Kandy with a Visit to Pinnawala Elephant Orphanage</p>
                                    </div>

                            </div>
                        </a>
                    </td>

                    <td> 
                        <a href="your_destination_page_url" class="no-decoration">
                            <div class="card d-inline-flex p-1" style="width: 18rem;">
                                <img src="{{ asset('image/cart_image1.png') }}" class="card-img-top object-fit-fill" alt="...">
                                    <div class="card-body">
                                        <p>time . category</p>
                                        <h5 class="card-title">Day Tour to Kandy</h5>
                                        <p class="card-text">Explore the Rich Heritage of Kandy with a Visit to Pinnawala Elephant Orphanage</p>
                                    </div>

                            </div>
                        </a>
                    </td>

                    <td> 
                        <a href="your_destination_page_url" class="no-decoration">
                            <div class="card d-inline-flex p-1" style="width: 18rem;">
                                <img src="{{ asset('image/cart_image1.png') }}" class="card-img-top object-fit-fill" alt="...">
                                    <div class="card-body">
                                        <p>time . category</p>
                                        <h5 class="card-title">Day Tour to Kandy</h5>
                                        <p class="card-text">Explore the Rich Heritage of Kandy with a Visit to Pinnawala Elephant Orphanage</p>
                                    </div>

                            </div>
                        </a>
                    </td>
                </tr>
              </table>
        </div>  --}}
        {{-- close container --}}
    </div>

        <div class="container-fluid mt-5 section-bg-color-home">
            <div class="row ">
                <div class="col m-5">
                    {{-- <pre>Elevate Your Sri Lankan Adventure</pre> --}}
                    <h2>Discover the Sri Lanka Tours Difference</h2>
                    <p>At Sri Lanka Tours Travels, we go beyond being just a travel agency; 
                        we're your gateway to an extraordinary Sri Lankan experience. Here's why choosing us will redefine your journey
                    </p>

                    <br/>

                    <ol>
                        <li>
                            <div class="alignment">
                                <h5>Tailored to You</h5>
                                <p>Discover adventures as unique as you are. We craft experiences to match your <br/>
                                individual tastes and preferences.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="alignment">
                                <h5>Effortless Exploration</h5>
                                <p>Navigate your own adventure with our rental cars. Explore at your own pace, <br/>
                                uncovering hidden treasures.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="alignment">
                                <h5>Authentic Connections</h5>
                                <p>Immerse yourself in Sri Lanka's culture. Meet locals, savor authentic cuisine, and <br/>
                                witness cultural traditions.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="alignment">
                                <h5>Safety & Security</h5>
                                <p>Your safety is paramount. Meticulously maintained vehicles and experienced <br/>
                                drivers ensure a secure and spectacular journey.
                                </p>
                            </div>
                        </li>
                    </ol>

                </div>
                <div class="col p-4">
                    <img src="{{ asset('image/people.png') }}" alt="forine people image" width="100%" class="mt-4">
                </div>
            </div>
        </div>
        {{-- close container fluid --}}

        {{-- youtube video --}}
        <div class="m-5">
            <iframe width="1150" height="550" src="https://www.youtube.com/embed/fn1wNxho5fQ?si=wNkij2WCaCDRkKV-" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="rounded mx-auto d-block">
            </iframe>
        </div>

        {{-- review Section --}}
        <div class="container-fluid mt-5 section-bg-color-home p-5" style="height: 540px;"> 
            <h2 class="text-center mb-3">What Our Clients Have to Say</h2>
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="col-7 review-bg p-4 text-justify">
                            {{-- <p class="fw-bold">What Our Clients Have to Say</p> --}}
                            <q class="font-monospace">Booking a tour with Ceylonia Travels was the best decision I made for my Sri Lankan adventure. 
                                The attention to detail and personalized experience made every moment memorable. 
                                From the ancient wonders to the scenic train rides, every day was a new discovery.
                            </q>
                            <hr/>
                            <p class="font-monospace">name <br/> country</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="col-7 review-bg p-4 text-justify">
                            {{-- <p class="fw-bold">What Our Clients Have to Say</p> --}}
                            <q class="font-monospace">Booking a tour with Ceylonia Travels was the best decision I made for my Sri Lankan adventure. 
                                The attention to detail and personalized experience made every moment memorable. 
                                From the ancient wonders to the scenic train rides, every day was a new discovery.
                            </q>
                            <hr/>
                            <p class="font-monospace">Joshap <br/> US</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="col-7 review-bg p-4 text-justify">
                            {{-- <p class="fw-bold">What Our Clients Have to Say</p> --}}
                            <q class="font-monospace">Booking a tour with Ceylonia Travels was the best decision I made for my Sri Lankan adventure. 
                                The attention to detail and personalized experience made every moment memorable. 
                                From the ancient wonders to the scenic train rides, every day was a new discovery.
                            </q>
                            <hr/>
                            <p class="font-monospace">Amal <br/> Sri lanka</p>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

        </div>

@endsection