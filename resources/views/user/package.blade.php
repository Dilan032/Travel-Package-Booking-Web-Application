{{-- in layouts folder, mainStructure file has user navigation bar and footer --}}
@extends('layouts/mainStructure')

@section('content')

    <div class="container mb-5">
        <div class="row">
            <div class="col-3 filter-bg p-3 mt-2">
                <h4>Search Tours</h4>
                <form action="{{ route('user.travelPackage.show') }}" method="get">
                    @csrf
                
                    <div class="dropdown mt-4">
                        <label for="price" class="fw-bold">Sort by price:</label>
                        <select name="price" id="price" class="form-select">
                            <option value="low_to_high">Low To High</option>
                            <option value="high_to_low">High To Low</option>
                        </select>
                    </div>
                
                    <div class="mt-3">
                        <label for="date" class="fw-bold">Check in - Check out:</label>
                        <input type="date" name="date" id="date" class="form-control">
                    </div>
                
                    <label class="mt-3 fw-bold">Tour Category:</label>
                    <div class="container after-filter-bg mt-1 p-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Adventure Tour" id="checkbox1">
                            <label class="form-check-label" for="checkbox1">Adventure Tour</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Beach Holiday Tour" id="checkbox2">
                            <label class="form-check-label" for="checkbox2">Beach Holiday Tour</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Cultural Tour" id="checkbox3">
                            <label class="form-check-label" for="checkbox3">Cultural Tour</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Business Trip Tour" id="checkbox4">
                            <label class="form-check-label" for="checkbox4">Business Trip Tour</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Wildlife Safaris" id="checkbox5">
                            <label class="form-check-label" for="checkbox5">Wildlife Safaris</label>
                        </div>
                    </div>
                
                    <div class="d-grid gap-2 mt-3">
                        <button type="submit" class="btn btn-primary fw-bold fs-5">Search</button>
                    </div>
                </form>
                
            </div>
        
            {{-- package start --}}
            <div class="col-9">
                <div class="container-fluid">

                    <div class="ms-5">
                        <div class="d-flex justify-content-between">
                            <h4>All Packages <span class="fw-light"> </span></h4>
                            <button type="button" id="shareBtn" class="btn btn-primary fw-bold">
                                Share
                                <img src="{{ asset('image/help-tools/share.png') }}" width="30px" alt="sgare image">
                            </button>
                        </div>
                        <hr>
                    </div>

                    {{-- All travel packages --}}
                    @include('components.user-components.home-travelPackage')


                </div> 
            </div>

        </div>
    </div>

    
    
@endsection