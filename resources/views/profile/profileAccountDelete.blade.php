@extends('layouts/mainStructure')

@section('content')
<div class="row">
    <div class="col-3">
        @include('profile.partials.sideMenu')
    </div>

    
    <div class="col-5 mx-auto p-5 dashbord-bg-sizeBig">
        @include('profile/partials/delete-user-form')
    </div>
</div>
    
@endsection