@extends('layouts/admin-layouts/main-structure')

@section('admincontent')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2 class="fw-light">Dashboard</h2>
        </div>
        <div class="container">
            <div class="row mt-5">
                {{-- All Users summary --}}
                <div class="col">
                    <h4 class="mb-4 text-center">Users</h4>
                    <div class="user-bg p-4 mb-5">
                        <table class="table table-borderless">
                            <tr>
                                <th>All Users</th>
                                <th><span class="badge rounded-pill text-bg-primary fs-6"> 3 </span></th>
                            </tr>
                            <tr>
                                <th>Active Users</th>
                                <th><span class="badge rounded-pill text-bg-success fs-6"> 3 </span></th>
                            </tr>
                            <tr>
                                <th>Not active Users</th>
                                <th><span class="badge rounded-pill text-bg-warning fs-6"> 3 </span></th>
                            </tr>
                        </table>
                    </div>
                </div>
                {{-- Resavation summary --}}
                <div class="col">
                    <h4 class="mb-4 text-center">Resavation</h4>
                    <div class="resavation-bg p-4">
                        <table class="table table-borderless">
                            <tr>
                                <th>All Resavation</th>
                                <th><span class="badge rounded-pill text-bg-primary fs-6"> 3 </span></th>
                            </tr>
                            <tr>
                                <th>Conform Resavation</th>
                                <th><span class="badge rounded-pill text-bg-success fs-6"> 3 </span></th>
                            </tr>
                            <tr>
                                <th>Reject Resavation</th>
                                <th><span class="badge rounded-pill text-bg-danger fs-6"> 3 </span></th>
                            </tr>
                            <tr>
                                <th>To Check Payment</th>
                                <th><span class="badge rounded-pill text-bg-warning fs-6"> 3 </span></th>
                            </tr>
                        </table>
                    </div>
                </div>
                {{-- Blog Post summary --}}
                <div class="col">
                    <h4 class="mb-4 text-center">Blog Post</h4>
                    <div class="user-bg p-4 mb-5">
                        <table class="table table-borderless">
                            <tr>
                                <th>All Blog Post</th>
                                <th><span class="badge rounded-pill text-bg-primary fs-6"> 3 </span></th>
                            </tr>
                        </table>
                    </div>
                </div>
                {{-- Travel Packages summary --}}
                <div class="col">
                    <h4 class="mb-4 text-center">Travel Packages</h4>
                    <div class="resavation-bg p-4">
                        <table class="table table-borderless">
                            <tr>
                                <th>Adventure Tour</th>
                                <th><span class="badge rounded-pill text-bg-primary fs-6"> 3 </span></th>
                            </tr>
                            <tr>
                                <th>Beach Holiday Tour</th>
                                <th><span class="badge rounded-pill text-bg-primary fs-6"> 3 </span></th>
                            </tr>
                            <tr>
                                <th>Cultural Tour</th>
                                <th><span class="badge rounded-pill text-bg-primary fs-6"> 3 </span></th>
                            </tr>
                            <tr>
                                <th>Business Trip Tour</th>
                                <th><span class="badge rounded-pill text-bg-primary fs-6"> 3 </span></th>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>


                <h3>Upcoming Events</h3>
                <div class="upcoming-events-details p-3 mt-4 bg-black text-white d-flex justify-content-between"> 
                    <span>Resavation Id</span>
                    <span>Travel Name</span>
                    <span>Travel Type</span>
                    <span>Travel Date</span>
                    <span>Duration</span>
                    <span>Action</span>
                </div>
                <div class="upcoming-events-bg mt-3">
                    <div class="upcoming-events-details p-3 mb-3 bg-white text-dark d-flex justify-content-between rounded border border-primary">
                        <span>Resavation Id</span>
                        <span>Travel Name</span>
                        <span>Travel Type</span>
                        <span>Travel Date</span>
                        <span>Duration</span>
                        <button class="btn btn-primary"><b>View</b></button>
                    </div>
                </div>
            </div>



        </div>
</main>

    
@endsection