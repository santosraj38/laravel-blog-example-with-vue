<?php

namespace App\Observers;

use App\Post;
use Auth;
use Event;

class PostObserver
{
    /**
     * Handle the Post "creating" event.
     *
     * @param  \App\Post  $post
     * @return void
     */
    public function creating(Post $post)
    {
        $post->user_id = Auth::user()->id;
				if (Post::where('slug',Str::slug($post->coverimage))->first()==null) {
					$slug = Str::slug($post->coverimage);
				}else {
					$slug = Str::slug($post->coverimage).'-'.uniqid();
				}
				$post->slug = $slug;
				if(request()->hasFile('coverimage')){
					$coverimage = new LabImage(request()->file('coverimage'),800,400,true,200,250);
					$post->coverimage = $coverimage->name;
				}
    }

    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        //
    }

    /**
     * Handle the Post "updating" event.
     *
     * @param  \App\Post  $post
     * @return void
     */
    public function updating(Post $post)
    {
        if ($post->getOriginal('coverimage')!=$post->coverimage) {
					if (Post::where('slug',Str::slug($post->coverimage))->first()==null) {
						$post->slug = Str::slug($post->coverimage);
					}else {
						$post->slug = Str::slug($post->coverimage).'-'.uniqid();
					}
				}
				if(request()->hasFile('coverimage')){
					$coverimage = new LabImage(request()->file('coverimage'),800,400,true,200,250);
					$post->coverimage = $coverimage->name;
				}
    }

    /**
     * Handle the Post "updated" event.
     *
     * @param  \App\Post  $post
     * @return void
     */
    public function updated(Post $post)
    {
        //
    }

    /**
     * Handle the Post "deleting" event.
     *
     * @param  \App\Post  $post
     * @return void
     */
    public function deleting(Post $post)
    {
        //
    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param  \App\Post  $post
     * @return void
     */
    public function deleted(Post $post)
    {
        //
    }

    /**
     * Handle the Post "Restoring" event.
     *
     * @param  \App\Post  $post
     * @return void
     */
    public function restoring(Post $post)
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     *
     * @param  \App\Post  $post
     * @return void
     */
    public function restored(Post $post)
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     *
     * @param  \App\Post  $post
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        //
    }
}
