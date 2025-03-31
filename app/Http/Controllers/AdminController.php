<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use App\Models\Category;

class AdminController extends Controller
{
    public function add_category(Request $request)
    {
        $category = new category;

        $category -> category_name = $request -> category_name;

        $category -> save();

        return redirect() -> back() -> with('message','Category added successfully');
    }

    public function view_category()
     {
         $category=category::all();

         return view('admin.category',compact('category'));
     }

     public function delete_category($id)
     {
        $category = category::find($id);

        $category -> delete();

        return redirect() -> back() -> with('message', 'Category deleted successfully');
     }

    public function add_post(Request $request )
    {
        $post = new post;

        $post->title=$request->title;

        $post->user_name=$request->user_name;

        $post->small_description=$request->small_description;

        $post->description=$request->description;

        $post->category=$request->category;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('post',$imagename);

        $post->image=$imagename;

        $post->save();

        return redirect()->back()->with('message', 'Post added successfully');

    }

    public function view_post()
    {
        $category=category::all();

        return view('admin.post',compact('category'));
    }

    public function show_post()
    {
        $post=post::all();

        return view('admin.show_post',compact('post'));
    }

    public function delete_post($id)
    {
        $post=post::find($id);

        $post->delete();

        return redirect()->back()->with('message', 'Post deleted successfully');

    }

    public function update_post($id)
    {
        $post=post::find($id);

        $category=category::all();

        return view('admin.update_post',compact('post','category'));
    }

    public function update_post_confirm(Request $request, $id)
    {
        $post=post::find($id);

        $post->title=$request->title;

        $post->description=$request->description;  

        $post->price=$request->price;

        $post->quantity=$request->quantity;

        $post->discount_price=$request->dis_price;

        $post->category=$request->category;

        $image=$request->image;

        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('post',$imagename);
    
            $post->image=$imagename;
        }

        

        $post->save();

        return redirect()->back()->with('message', 'Post updated successfully');

    }
    
}
