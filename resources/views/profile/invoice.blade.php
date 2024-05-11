@extends('layouts/mainStructure')

@section('content')
<div class="row">
    <div class="col-2">
        @include('profile.partials.sideMenu')
    </div>

    <div class="col-10 mx-auto p-4 dashbord-bg">
        @include('profile.partials.invoiceDetail')
    </div>
</div>
    
@endsection