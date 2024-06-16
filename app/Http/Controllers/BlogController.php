<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogPostRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
// use PHPUnit\TextUI\Configuration\File;

class BlogController extends Controller
{
    // for admin showBlogs
    public function showBlogs(){
        $blogs = Blog::orderBy('created_at','DESC')->get();
        return view('admin.addBlog', compact('blogs')); // Pass data to the view
        
    }
    // for user showBlogs
    public function showBlogsForUser(){
        $blogs = Blog::orderBy('created_at','DESC')->get();
        return view('user/blog', compact('blogs')); // Pass data to the view
        
    }

        // for user showBlog page
        public function showBlogPageForUser($id){
            $blog = Blog::findOrFail($id);
            return view('user.blogPage',[ 'blog' => $blog
            
        ]);
            
        }


    public function store(Request $request){
        $rules =[
            'blogTitle' => 'required|string|max:255',
            'description' => 'required|string',
            'blogImage' => 'image|mimes:jpeg,svg,png,webp,jpg,gif|max:10240', // Ensure image file, max 10MB
        ];

        $validator = Validator::make($request->all(),  $rules);
        //to show massages | check validate
        if ($validator->fails()) {
            return redirect()->route('admin.addBlog')->withErrors($validator)->withInput();
        }

        // for ck edotor
        // if($request->hasFile('upload')){
        //     $originName = $request->file('upload')->getClientOriginalName();
        //     $fileName = pathinfo($originName, PATHINFO_FILENAME);
        //     $extention = $request->file('upload')->getClientOriginalExtension();
        //     $fileName = $fileName . '_'. time() . '.' . $extention;

        //     $request->file('upload')->move(public_path('image/uploads/blog'),$fileName);
        //     $url = asset('image/uploads/blog/'. $fileName);
        //     return response()->json(['fileName' => $fileName,'uploaded'=>1, 'url' => $url]);
        // }

        //to store data code here
        // 1. connect with the model
        $blog = new Blog();

        //set the attribute
        $blog->title = $request->blogTitle;
        $blog->discription = $request->description;
        $blog->save();

        if($request->blogImage !=""){
            // for image
            $blogImage = $request->blogImage;
            $ext = $blogImage->getClientOriginalExtension();
            //unique image name
            $imageName = time().'.'.$ext; 
            //location to save
            $blogImage->move(public_path('image/uploads/blog'),$imageName);
            //for save image
            $blog->image = $imageName;
            $blog->save();
        }
        
        // Process the validated data, such as saving it to the database
        return redirect()->route('admin.addBlog')->with('success', 'Blog post created successfully');
        
    }

    public function edit($id){
        $blog = Blog::findOrFail($id);
        return view('admin.editBlogPost',[
            'blog' => $blog
        ]);
    }

    public function update($id, Request $request){
        $blog = Blog::findOrFail($id);

        $rules =[
            'blogTitle' => 'required|string|max:255',
            'description' => 'required|string',
            'blogImage' => 'image|mimes:jpeg,svg,png,jpg,gif,webp|max:10240', // Ensure image file, max 10MB
        ];

        $validator = Validator::make($request->all(),  $rules);
        //to show massages | check validate
        if ($validator->fails()) {
            return redirect()->route('admin.editBlog', $blog->id)->withErrors($validator)->withInput();
        }

        //to store data code here
        //set the attribute
        $blog->title = $request->blogTitle;
        $blog->discription = $request->description;
        $blog->save();

        if($request->blogImage !=""){

            //delete old image
            $imagePath = public_path('upload/blog/'.$blog->image);
            //check image is it defalt or not
            if($blog->image !== 'empty-image.png' && File::exists( $imagePath)){
                File::delete( $imagePath );
            }

            //delete image (i added defalt image. so this is not good)
            // File::delete(public_path('upload/blog/'. $blog->image));

            // for image
            $blogImage = $request->blogImage;
            $ext = $blogImage->getClientOriginalExtension();
            //unique image name
            $imageName = time().'.'.$ext; 

            //location to save
            $blogImage->move(public_path('image/uploads/blog'),$imageName);

            //for save image
            $blog->image = $imageName;
            $blog->save();
        }
        
        // Process the validated data, such as saving it to the database
        return redirect()->route('admin.addBlog')->with('success', 'Blog post update successfully');
        
        
    }

    public function destroy($id){
        $blog = Blog::findOrFail($id);

        //delete image
        $imagePath = public_path('upload/blog/'.$blog->image);
        //check image is it defalt or not and delete
        if($blog->image !== 'empty-image.png' && File::exists( $imagePath)){
            File::delete( $imagePath );
        }

        //delete bolg post from database
        $blog->delete();

        return redirect()->route('admin.addBlog')->with('success', 'Blog post Delete successfully');
    }
}
