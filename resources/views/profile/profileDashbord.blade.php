@extends('layouts/mainStructure')

@section('content')
<div class="row">
    <div class="col-2">
        @include('profile.partials.sideMenu')
    </div>  
    <div class="col-10 mx-auto p-5 dashbord-bg-sizeBig">
        @include('profile/partials/dashbord')
    </div>
</div>
    
@endsection