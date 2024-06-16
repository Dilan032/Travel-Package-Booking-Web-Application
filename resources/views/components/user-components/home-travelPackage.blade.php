<div class="container mt-3">
    <div class="row " >
      @if ( $travelPackage -> isNotEmpty())  
      @foreach ( $travelPackage as $package)  
        <div class="col-md-4 p-4">
          <a href="{{route('user.packagePage', $package->id)}}">  

            <div class="travelPackage-bg post-bg travelPackage-bg">    
              <div style="height: 180px;">
                  {{-- image --}}
                  @if ($package-> image_1 != "")
                  <img src="{{ asset('image/uploads/travelPackage/'.$package-> image_1) }}" alt="package Image" class="object-fit-contain img-fluid">
                  @else
                  <img src="{{ asset('image/uploads/travelPackage/empty-image.png') }}" alt="package Image" class="object-fit-contain img-fluid" width="150px">
                  @endif
              </div>
              
              <hr> 
              
                <div class="text-black bg-white p-2" style="height: 210px; border-radius: 10px;">
                  <div class="fs-5">
                    <span class="badge text-bg-secondary "> {{ $package->tour_type }} </span>
                  </div>
                  
                  <div class="mt-2">
                    <h5 class="mb-4"> {{ $package->package_name }}</h5>
                    <span class="badge text-bg-light p-2 mb-2 fs-6"><b>{{ $package->duration }} Days </b></span>
                    <h5> 
                      <span class="badge text-bg-warning fs-5"> From: ${{ $package->price_start_from }} </span>
                    </h5>
                  </div>
                </div>
              
            </div>
          </a>
        </div>
        {{-- add new row --}}
        @if ($loop->iteration % 3 === 0) 
    </div> 
    {{-- end first row --}}

    <div class="row ">
        @endif
      @endforeach
      @endif
    </div>
    
</div>

