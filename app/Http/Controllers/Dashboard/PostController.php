<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\Post\StoreRequest;
use Illuminate\Http\Request;
use App\Http\Requests\Post\PutRequest;

class PostController extends Controller
{

    public function index()
    {
      // $posts = Post::get();
       $posts = Post::paginate(3);
       //dd($posts);
       return view('dashboard.post.index', compact('posts'));
    } 
    
    public function create()
    {
        $categories = Category::pluck('id', 'title');
        //dd($categories);
         $post = new Post();
                return view('dashboard.post.create', compact('categories', 'post'));

    }

    public function store(StoreRequest $request)
    {
        //dd($request->all());
       
        Post::create($request->all());
        return to_route("post.index");
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        $categories = Category::pluck('id', 'title');
           return view('dashboard.post.edit', compact('categories', 'post'));
    }

    public function update(PutRequest $request, Post $post)
    {
          $data = $request->validated();
          //dd($data);
        if( isset($data["image"])){
            $data["image"] = time().".".$data["image"]->extension();
            $request->image->move(public_path("image"), $data["image"] );
        }
 
         $post->update($data);
               return to_route("post.index");
    }

    public function destroy(Post $post)
    {
         $post->delete();
                return to_route("post.index");
    }
}
