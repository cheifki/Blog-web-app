<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Post;

use App\Models\Category;


class HomeController extends Controller
{
    public function index()
    {
        $post = Post::all();

        $category = Category::all();

        return view('home.userpage',compact('post','category'));
    }
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype =='1')
        {
            return view ('admin.home');
        }
        else
        {
            $post = Post::all();

            $category = Category::all();
            
            return view('home.userpage', compact('post','category'));
        }
    }

    public function blog($id)
    {
        $post = Post::find($id);

        $category = Category::where('category_name', $post->category)->first();

        return view('home.blog',compact('post','category'));
    }

    public function show($id)
    {
        $category = Category::find($id);

        // Fetch posts that belong to this category
        $post = Post::where('category', $category->category_name)->get();

        return view('home.category',compact('category','post'));
    }


    public function searchdata(Request $request)
    {
        $searchText=$request->search;

        $post=Post::where('title','LIKE',"%$searchText%")->get();

        return view('home.body',compact('post'));
    }

}
