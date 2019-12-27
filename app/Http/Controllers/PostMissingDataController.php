<?php

namespace App\Http\Controllers;

use App\User;
use App\PostMissingData;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostMissingDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post_missing_datas = PostMissingData::all();
        foreach ($post_missing_datas as $post)
        {
            $post->user_name = User::find($post->user_id)->name;
        }
        return view('bulletin', compact('post_missing_datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {
        $title=$request->title;
        $post_missing_datas = PostMissingData::where('title','like','%'.$title.'%')->get();
        foreach ($post_missing_datas as $post)
        {
            $post->user_name = User::find($post->user_id)->name;
        }

        return view('bulletin', compact('post_missing_datas'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PostMissingData  $postMissingData
     * @return \Illuminate\Http\Response
     */
    public function show(PostMissingData $post_missing_data, Comment  $comment) /* 將model傳入 */
    {
        $comment = Comment::all();
        foreach ($comment as $post)
        {
            $post->user_name = User::find($post->user_id)->name; /* 抓每個user_name */
        }

        //return view('showpost', compact('post_missing_data'), compact('comment'));  /*回傳showpost頁面*/
        return view('showpost',['post_missing_data'=>$post_missing_data, 'comment'=>$comment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PostMissingData  $postMissingData
     * @return \Illuminate\Http\Response
     */
    public function edit($post_missing_data)
    {
        $post_missing_data = Post::find($post_missing_data);
        
        //Check if post exists before deleting
        if (!isset($post_missing_data)){
            return redirect('/posts')->with('error', 'No Post Found');
        }
        // Check for correct user
        if(auth()->user()->id !==$post_missing_data->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }



        return view('userpostedit', with(['post_missing_data' => $post_missing_data]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostMissingData  $postMissingData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post_missing_data)
    {
        $this->validate($request, [
            'title' => 'required',
            'location' => 'required',
            'description' => 'required'
        ]);

        $post_missing_data = PostMissingData::find($post_missing_data);
        $post_missing_data -> title = $request -> input('title');
        $post_missing_data -> location = $request -> input('location');
        $post_missing_data -> description = $request -> input('description');

        $user = Auth::user()->id; 

        return redirect('userprofile/'.$user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostMissingData  $postMissingData
     * @return \Illuminate\Http\Response
     */
    public function destroy($post_missing_data) //只傳入$id
    {
        $post_missing_data = PostMissingData::find($post_missing_data);
        
        $post_missing_data -> delete();

        $user = Auth::user()->id; 

        return redirect('userprofile/'.$user); //回傳原本頁面
    }
}
