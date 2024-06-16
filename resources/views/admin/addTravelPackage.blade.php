@extends('layouts/admin-layouts/main-structure')

@section('admincontent')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        {{-- add blog post btn --}}
        <a href="{{route('admin.addPackage.create')}}" type="button" class="btn btn-primary fw-bold">
            <img src="{{ asset('image/help-tools/add.png') }}" alt="add icon" width="30px">
            Create Travel Package
        </a>     
    </div>
    <h2 class="fw-light mb-5">Travel Package</h2>

    <div class="container">
        {{-- To display validation errors or success messages --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="fw-medium">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                    <li class="fw-light">try again</li>
              </ul>
          </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
        @endif

            {{-- All travel package --}}
            @include('components/admin-components/travelPackage/home-tarvelPackage')
        
    </div>
</main>

    
@endsection