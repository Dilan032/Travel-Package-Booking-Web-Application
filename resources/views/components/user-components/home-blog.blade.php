<div class="container mt-5">
    <div class="row " >
      @if ($blogs->isNotEmpty())  
      @foreach ($blogs as $blogPost)  
        <div class="col-md-3 p-4">
          <a href="{{route('blog.page', $blogPost->id)}}">  

            <div class="blog-post-container post-bg">
              <div style="height: 180px;">
                {{-- image --}}
              @if ($blogPost-> image != "")
                <img src="{{ asset('image/uploads/blog/'.$blogPost-> image) }}" alt="Blog Post Image" class="object-fit-contain img-fluid">
              @else
                <img src="{{ asset('image/uploads/blog/empty-image.png') }}" alt="Blog Post Image" class="object-fit-contain img-fluid">
              @endif          
              </div> 

              <hr>
              
              <h5> {{ $blogPost->title}} </h5>
              <p>  {{ \carbon\carbon::parse($blogPost->created_at)->format('d M, Y') }} </p>
            </div>
          </a>
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