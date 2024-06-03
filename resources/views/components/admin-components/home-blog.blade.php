<div class="container mt-3">
      <div class="row " >
        @if ($blogs->isNotEmpty())  
        @foreach ($blogs as $blogPost)  
          <div class="col-md-3 p-4">
            <div class="blog-post-container post-bg">
              
              <div style="height: 160px;">
              {{-- image --}}
              @if ($blogPost-> image != "")
                <img src="{{ asset('image/uploads/blog/'.$blogPost-> image) }}" alt="Blog Post Image" class="object-fit-contain img-fluid imageHoverEffect">
              @else
                <img src="{{ asset('image/uploads/blog/empty-image.png') }}" alt="Blog Post Image" class="object-fit-contain img-fluid">
              @endif
              </div>

              <hr> 
              <div style="height: 100px;">
                <h5><a href="#">  {{ $blogPost->title}}  </a></h5>
                <p>  {{ \carbon\carbon::parse($blogPost->created_at)->format('d M, Y') }} </p>
              </div>
              
              {{-- buttons --}}
              <div class="d-flex justify-content-start gap-1">
                <a href="{{route('admin.editBlog',$blogPost->id)}}" class="btn btn-primary btn-sm">Update</a>
                <a href="{{route('blog.page', $blogPost->id)}}" class="btn btn-secondary btn-sm" target="_blank">View</a>
                
                {{-- button for delete the blog post --}}
                <a href="#" onclick="deleteBlogPost({{ $blogPost->id}});" class="btn btn-danger btn-sm">Delete</a>
                <form id="delete-blog-from-{{ $blogPost->id }}" action="{{route('admin.destroyBlog', $blogPost->id)}}" method="post">
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
    function deleteBlogPost(id){
      if(confirm("Do you want to Delete Blog Post ?")){
        document.getElementById('delete-blog-from-' + id).submit();
      }
    }
  </script>

  