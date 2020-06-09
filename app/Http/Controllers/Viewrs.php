<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Viewrs extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd(1);
        $post = \App\Models\News::find($id); // fetch post from database
        $post->increment('view_count'); // add a new page view to our `views` column by incrementing it

        return view('posts.show', [
            'post' => $post,
        ]);
    }


}
