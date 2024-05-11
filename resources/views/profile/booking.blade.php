@extends('layouts/mainStructure')

@section('content')
<div class="row">
    <div class="col-3">
        @include('profile.partials.sideMenu')
    </div>

    <div class="col-5 mx-auto p-4 dashbord-bg">
        @include('profile.partials.bookingDetails')
    </div>
</div>
    
@endsection