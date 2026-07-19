<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Db;

class BaseDatosController extends Controller
{
    public function index(){

    //ORM

        //$post = Post::where('id', 11)->get();
        //dd($post[0]->title);

        //$post2 = Post::find(11);
        //dd($post2->title);

        //$post2 = Post::where('id', 11)->first();
        //dd($post2->title);

    //Query Builder

        //$post3 = DB::table('posts')->where('id',11)->first();
        //dd($post3->title);

        //$post3 = DB::table('posts')->where('id',11)->toSql();
        //echo $post3;

        /*

        $post_pages = Post::join('categories', 'categories.id', '=', 'posts.category_id')
                            ->select('posts.*', 'categories.title as categoryss')
                            ->orderBy('posts.created_at', 'desc')->get();
       //dd($post_pages);

       foreach($post_pages as $post){
        echo $post->title . "-------->" . $post->categoryss . "<br>";
       }

        $post_sql = Post::join('categories','categories.id','=','posts.category_id')
                          ->select('posts.*','categories.title aas categoryss')
                          ->orderBy('posts.created_at', 'desc')->toSql();
        echo $post_sql;
        */ 
        /*

        $post_pages2 = Post::join('categories','categories.id','=','posts.category_id')
                          ->select('posts.*','categories.title as categoryss')
                          ->where('categories.id', 3)
                          ->orderBy('posts.created_at', 'desc')->get();
        foreach($post_pages2 as $post){
            echo $post->title . "---------->" . $post->categoryss . "<br>";
        }

        $post_pag = Post::join('categories','categories.id','=','posts.category_id')
                          ->select('posts.*','categories.title as categoryss')
                          ->where('categories.id', 3)
                          ->orderBy('posts.created_at', 'desc')->toSql();
        echo $post_pag;
        */

        /*

        $posts3 = Post::join('categories', 'categories.id', '=', 'posts.category_id')
                        ->select('posts.*', 'categories.title as category', 'categories.slug as c_slug')
                        ->where('categories.slug', 'PEPE')
                        ->where('posted', "yes")
                        ->where(function ($query) {
                                       $query->orWhere('type', 'post')
                                             ->orWhere('type', 'courses')
                                             ->orWhere('type', 'group');
                                })
                        ->orderBy('posts.created_at', 'desc')
                        ->toSql();
                        echo $posts3;
             
                        */
                        /*
        $ids = array( 6, 7, 8 );

        //$posts_in = Post::whereIn('posts.id' , $ids)->get();
        $posts_in = Post::whereNotIn('posts.id' , $ids)->get();
        foreach($posts_in as $post){
            echo $post->id . "----------->" . $post->title . "<br>";
        }
            */
        /*

        $ids = array( 6, 7, 8);
        $post_first = Post::whereIn('posts.id', $ids)->first();
        dd($post_first->id);
        */

        /*

        $posts_limit = Post::limit(2)->get();
        dd(posts_limit);
        */

        /*
        $posts_offset = Post::limit(3)->offset(2)->get();

           foreach($posts_offset as $post){
            echo $post->id . "----------->" . $post->title . "<br>";
           }
            */
        
           /*
        //$post_count = Post::limit(2)->offset(2)->get()->count();
        $post_count = Post::limit(2)->offset(2)->get()->count('posts.id');

        dd($post_count);
        */

        /*
        $post_random = Post::where('id', '<>', 1)->inRandomOrder()->get();
        //dd($post_random);

        foreach($post_random as $post){
            echo $post->id . "--------->" . $post->title . "<br>";
        }
            */

        /*
        $post_cat = Post::with('category')->get();

        foreach($post_cat as $post){
            echo $post->category->id . "---------->" . $post->category->title . "<br>";
        }
        echo "<hr>";

        $posts_perezosa = Post::all();
                foreach($posts_perezosa as $p){
                    echo $p->category->id . "--------->" . $p->category->title . "<br>";
                }
                    */
      /*
        $post_json = Post::find(6);
        $json = $post_json->toJson();
        return $json;

        $post_pluck = Post::all()
        */

    }
}
