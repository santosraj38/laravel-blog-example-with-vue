<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Session;
use Auth;
use App\Post;
use File;
use Image;
use App\Category;
use App\Http\Resources\Post as PostResource;
use App\Http\Resources\PostCollection;
use App\Tag;


class PostController extends Controller
{
  public function __construct(){
    $this->middleware('auth',['except'=>array('index','show')]);
    $this->authorizeResource(Post::class);
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate('10');
				return new PostCollection($posts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $post = Post::create($request->except('coverimage'));
				if ($request->hasFile('coverimage')) {
          $coverimagefile = time().uniqid().'.'.$request->file('coverimage')->getClientOriginalExtension();
          $post->update(['coverimage'=> $coverimagefile]);
          Image::make($request->file('coverimage'))->save(public_path('images/'.$coverimagefile));
          Image::make($request->file('coverimage'))->resize(250, 215)->save(public_path('thumbnails/'.$coverimagefile));
        }
				$post->tags()->sync($request->tags,false);
				return new PostResource($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return new PostResource($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request,Post $post)
    {
        $post->update($request->except('coverimage'));
				if ($request->hasFile('coverimage')) {
          File::delete(public_path('images/'.$post->coverimage));
          File::delete(public_path('thumbnails/'.$post->coverimage));
          $coverimagefile = time().uniqid().'.'.$request->file('coverimage')->getClientOriginalExtension();
          $post->update(['coverimage'=>$coverimagefile]);
          Image::make($request->file('coverimage'))->save(public_path('images/'.$coverimagefile));
          Image::make($request->file('coverimage'))->resize(250, 215)->save(public_path('thumbnails/'.$coverimagefile));
        }
				$post->tags()->sync($request->tags);
				return new PostResource($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->comments()->delete();
				$post->likes()->delete();
				$post->ratings()->delete();
				$post->tags()->detach();
				$post->delete();
				return redirect()->route('posts.index');
    }
}
