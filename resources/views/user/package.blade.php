{{-- in layouts folder, mainStructure file has user navigation bar and footer --}}
@extends('layouts/mainStructure')

@section('content')

    <div class="container mb-5">
        <div class="row">
            <div class="col-3 filter-bg p-3">
                <h4>Search Tours</h4>
                {{-- dropdown 1 --}}
                <div class="dropdown mt-4">
                    <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Destinations
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                    </ul>
                </div>

                  {{-- select date --}}
                <div class="mt-3">
                    <label for="date" class="fw-bold mb-1">Check in - Check out</label>
                    <input type="date" name="date" class="form-control">
                </div>

                {{-- select catogery type --}}
                <label class="mt-3 fw-bold">Category Types</label>
                <div class="container after-filter-bg mt-1 p-1">
                    <form multiple>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="option1" id="checkbox1">
                            <label class="form-check-label" for="checkbox1">Option 1</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="option2" id="checkbox2">
                            <label class="form-check-label" for="checkbox2">Option 2</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="option3" id="checkbox3">
                            <label class="form-check-label" for="checkbox3">Option 3</label>
                        </div>
                    </form>
                </div>

                {{-- select catogery type part 2 --}}
                <label class="mt-3 fw-bold">Others</label>
                <div class="container after-filter-bg mt-1 p-1">
                    <form multiple>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="option1" id="checkbox1">
                            <label class="form-check-label" for="checkbox1">Free cancellation</label>
                        </div>
                    </form>
                </div>

                {{-- search button --}}
                <div class="d-grid gap-2 mt-3">
                    <button type="button" class="btn btn-primary fw-bold fs-5">Search</button>
                </div>

            </div>
        
            {{-- package start --}}
            <div class="col-9">
                <div class="container-fluid">

                    <div class="ms-5">
                        <div class="d-flex justify-content-between">
                            <h4>3 Packages <span class="fw-light">in Day & Round Tours</span></h4>
                            <button type="button" id="shareBtn" class="btn btn-primary fw-bold">
                                Share
                                <img src="{{ asset('image/help-tools/share.png') }}" width="30px" alt="sgare image">
                            </button>
                        </div>
                        <hr>
                    </div>

                    <table class="table table-borderless ms-5">
                        <tr>
                            <td> {{-- Packages cart 1 --}}
                                <a href="{{ route('packagePage') }}" class="no-decoration">
                                    <div class="card d-inline-flex p-1" style="width: 16rem;">
                                        <img src="{{ asset('image/cart_image1.png') }}" class="card-img-top object-fit-fill" alt="...">
                                            <div class="card-body">
                                                <p>time . category</p>
                                                <h5 class="card-title">Day Tour to Kandy</h5>
                                                <p class="card-text">Explore the Rich Heritage of Kandy with a Visit to Pinnawala Elephant Orphanage</p>
                                            </div>

                                    </div>
                                </a>
                            </td>

                            <td>  {{-- Packages cart 2 --}}           
                                <a href="{{ route('packagePage') }}" class="no-decoration">
                                    <div class="card d-inline-flex p-1" style="width: 16rem;">
                                        <img src="{{ asset('image/cart_image1.png') }}" class="card-img-top object-fit-fill" alt="...">
                                            <div class="card-body">
                                                <p>time . category</p>
                                                <h5 class="card-title">Day Tour to Kandy</h5>
                                                <p class="card-text">Explore the Rich Heritage of Kandy with a Visit to Pinnawala Elephant Orphanage</p>
                                            </div>

                                    </div>
                                </a>
                            </td>

                            <td> {{-- Packages cart 3 --}}
                                <a href="{{ route('packagePage') }}" class="no-decoration">
                                    <div class="card d-inline-flex p-1" style="width: 16rem;">
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
                </div> 
            </div>

        </div>
    </div>

    
    
@endsection