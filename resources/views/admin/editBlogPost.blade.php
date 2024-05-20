@extends('layouts/admin-layouts/main-structure')

@section('admincontent')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <a href="{{route('admin.addBlog')}}" type="button" class="btn btn-dark">
            <img src="{{ asset('image/help-tools/back.png') }}" alt="add icon" width="20px">    
            Back
        </a>
    </div>
    <h2 class="fw-light mb-4">Edit Blog Post</h2>
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

    <div class="container edit-post-bg">         
        <form action="{{route('admin.updateBlog', $blog->id)}}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">              
               <div class="row mb-5">
                    <div class="col">                  
                        {{-- image --}}
                        @if ($blog-> image != "")
                            <img src="{{ asset('image/uploads/blog/'.$blog-> image) }}" alt="Blog Post Image" class="object-fit-contain img-fluid">
                        @else
                            <img src="{{ asset('image/uploads/blog/empty-image.png') }}" alt="Blog Post Image" class="object-fit-contain img-fluid">
                        @endif
                    </div>
                    <div class="col-8">
                        <br><br><br><br><br><br><br><br>
                        <label for="recipient-name" class="col-form-label fw-semibold">Image</label>
                        <input type="file" name="blogImage" class="form-control" id="recipient-name">
                    </div>
               </div>
            </div>
            {{-- blog title --}}
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label fw-semibold">Title</label>
                <input type="text" name="blogTitle" value="{{old('blogTitle',$blog->title)}}" class="form-control" id="recipient-name">
            </div>
            {{-- blog Description --}}
            <div class="mb-3">
                <label for="message-text" class="col-form-label fw-semibold">Description</label>
                <textarea name="description"  class="form-control" id="blogDescription" rows="10"> {{old('description',$blog->discription)}} </textarea>
            </div>
            
            <div class="modal-footer mb-5">
                <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Update Post</button>
            </div>
        </form>
    </div>
 </main>   
@endsection