<div class="container mt-3">
    <div class="row " >
      @if ( $travelPackage -> isNotEmpty())  
      @foreach ( $travelPackage as $package)  
        <div class="col-md-4 p-4">
          <a href="{{route('user.packagePage', $package->id)}}">  

            <div class="travelPackage-bg-container post-bg travelPackage-bg">    
              <div style="height: 220px;">
                  {{-- image --}}
                  @if ($package-> image_1 != "")
                  <img src="{{ asset('image/uploads/travelPackage/'.$package-> image_1) }}" alt="package Image" class="object-fit-contain img-fluid">
                  @else
                  <img src="{{ asset('image/uploads/travelPackage/empty-image.png') }}" alt="package Image" class="object-fit-contain img-fluid" width="150px">
                  @endif
              </div>
              <hr> 
              <div style="height: 150px;">
                <div class="text-black bg-white p-2" style="height: 230px; border-radius: 10px;">
                  <p><b>{{ $package->duration }} {{ $package->duration_type }}</b></p>
                  <span class="badge text-bg-secondary mb-3"> {{ $package->tour_type }} </span>
                  
                  <h5> {{ $package->package_name }}</h5>
                  <h5> 
                      <span class="badge text-bg-warning"> From: ${{ $package->price_start_from }} </span>
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

