{{-- <div class="modal fade modal-xl" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Blog Post</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  
          <form action="{{route('admin.editBlog',$blogPost->id)}}" method="post" enctype="multipart/form-data">
              @csrf
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label fw-semibold">Title</label>
              <input type="text" name="blogTitle" value="{{old('blogTitle')}}" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label fw-semibold">Description</label>
              <textarea name="description"  class="form-control" id="blogDescription" rows="5"> {{old('blogTitle')}} </textarea>
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label fw-semibold">Image</label>
              <input type="file" name="blogImage" class="form-control" id="recipient-name">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary">Save Post</button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div> --}}