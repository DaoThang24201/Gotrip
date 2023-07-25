<?php

namespace Modules\Blog\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Blog\Models\Blog;
use Modules\Blog\Models\BlogCategory;
use Modules\Blog\Models\BlogComment;
use Modules\Blog\Models\BlogImage;
use Modules\Blog\Models\Tag;

class BlogController extends Controller {

    public function index( Request $request) {

        $query = Blog::query();

        if ($cat_id = $request->query('category_id')) {
            $query->where('category_id', $cat_id);
        }

        if($search = $request->query('search')){
            $query->where('title','like','%'.$search.'%');
        }

        $blogs = $query->paginate(4);

        $categories = BlogCategory::all();

        $recent_posts = Blog::orderBy('created_at','desc')->limit(3)->get();

        $tags = Tag::all();

        return view('Blog::frontend.index',compact('blogs','categories','recent_posts','tags'));
    }

    public function tag($tagName, Request $request) {

        $tag = Tag::query()->where('name',$tagName)->first();

        if(!$tag){
            abort(404);
        }

        $query = Blog::query();

        $query->join('blog_tag','blogs.id','=','blog_tag.blog_id');

        $query->where('blog_tag.tag_id',$tag->id);

        $blogs = $query->paginate(4);



        $categories = BlogCategory::all();

        $recent_posts = Blog::orderBy('created_at','desc')->limit(3)->get();

        $tags = Tag::all();

        return view('Blog::frontend.index',compact('blogs','categories','recent_posts','tags'));
    }


    public function show($slug) {

        $query = Blog::query();

        $blog = $query->where('slug',$slug)->first();

        $related_blogs = Blog::where('category_id', $blog->category_id)->get();

        return view('Blog::frontend.show',compact('blog','related_blogs'));
    }
}
