<?php


namespace App\Http\Controllers;

   use DB;

 use App\post;



class postscontroller extends controller
{
    public function show($slug)
    {

    $post= post:: where('slug',$slug)->first();





        return view('post', [
            'post' => $post

        ]);
    }
}
