<div class="container mt-3">
    <div class="row " >
      @if ( $travelPackage -> isNotEmpty())  
      @foreach ( $travelPackage as $package)  
        <div class="col-md-3 p-4">
          <div class="travelPackage-bg-container post-bg travelPackage-bg">    
            <div style="height: 200px;">
                {{-- image --}}
                @if ($package-> image_1 != "")
                <img src="{{ asset('image/uploads/travelPackage/'.$package-> image_1) }}" alt="package Image" class="object-fit-contain img-fluid">
                @else
                <img src="{{ asset('image/uploads/travelPackage/empty-image.png') }}" alt="package Image" class="object-fit-contain img-fluid" width="150px">
                @endif
            </div>
            <hr> 
            <div style="height: 180px;">
                <p class="text-black bg-white"> {{ \carbon\carbon::parse($package->created_at)->format('d M, Y') }} </p>
                <span class="badge text-bg-secondary"> {{ $package->tour_type }} </span>
                 
                <h5> {{ $package->package_name }}</h5>
                <h5> 
                    <span class="badge text-bg-warning"> From: ${{ $package->price_start_from }} </span>
                </h5>
            </div>
            
            {{-- buttons --}}
            <div class="d-flex justify-content-start gap-1">
              <a href="{{route('admin.editTravelPackage',$package->id)}}" class="btn btn-primary btn-sm">Update</a>
              <a href="{{route('user.packagePage', $package->id)}}" class="btn btn-secondary btn-sm" target="_blank">View</a>
              
              {{-- button for delete the blog post --}}
              <a href="#" onclick="deleteTravelPackage({{ $package->id}});" class="btn btn-danger btn-sm">Delete</a>
              <form id="delete-travelPackage-from-{{ $package->id }}" action="{{route('admin.deleteTravelPackage', $package->id)}}" method="post">
                  @csrf
                  @method('delete')
              </form>
            </div>

          </div>
        </div>
        {{-- add new row --}}
        @if ($loop->iteration % 4 === 0) 
    </div> 
    {{-- end first row --}}

    <div class="row ">
        @endif
      @endforeach
      @endif
    </div>
    
</div>

{{-- script for delete blog post cofomation alert --}}
<script>
  function deleteTravelPackage(id){
    if(confirm("Do you want to Delete Travel Package ?")){
      document.getElementById('delete-travelPackage-from-' + id).submit();
    }
  }
</script>
