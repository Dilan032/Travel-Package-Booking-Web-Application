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

    <div class="container ">         
        <form action="{{route('admin.updateBlog', $blog->id)}}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">              
               <div class="row mb-4">
                    <div class="col ">                  
                        {{-- image --}}
                        @if ($blog-> image != "")
                            <img src="{{ asset('image/uploads/blog/'.$blog-> image) }}" alt="Blog Post Image" class="object-fit-contain img-fluid bg-for-list">
                        @else
                            <img src="{{ asset('image/uploads/blog/empty-image.png') }}" alt="Blog Post Image" class="object-fit-contain img-fluid bg-for-list">
                        @endif
                    </div>
                    <div class="col-8">
                        <br><br><br><br><br>
                        <div class="bg-for-list">
                            <label for="recipient-name" class="col-form-label fw-semibold">Image</label>
                            <input type="file" name="blogImage" class="form-control" id="recipient-name">
                        </div>
                    </div>
               </div>
            </div>
            
            <div class="bg-for-list">
                {{-- blog title --}}
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label fw-semibold">Title</label>
                    <input type="text" name="blogTitle" value="{{old('blogTitle',$blog->title)}}" class="form-control" id="recipient-name">
                </div>
                {{-- blog Description --}}
                <div class="mb-4">
                    <label for="message-text" class="col-form-label fw-semibold">Description</label>
                    <textarea name="description"  class="form-control" id="blogDescription" rows="10"> {{old('description',$blog->discription)}} </textarea>
                </div>
                <p class="text-info">Enter <code> Windows + . </code> to add icons</p>
            </div>
            <div class="modal-footer mt-4">
                <a href="{{route('admin.addBlog')}}" type="button" class="btn btn-secondary me-2">Cancel</a>
                <button type="submit" class="btn btn-primary">Update Post</button>
            </div>
            <br><br>
        </form>
    </div>
 </main>   
@endsection