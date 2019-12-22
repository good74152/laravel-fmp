<?php

namespace App\Http\Controllers;

use App\User;
use App\PostMissingData;
use Illuminate\Http\Request;

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
    public function show(PostMissingData $postMissingData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PostMissingData  $postMissingData
     * @return \Illuminate\Http\Response
     */
    public function edit(PostMissingData $postMissingData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostMissingData  $postMissingData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostMissingData $postMissingData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostMissingData  $postMissingData
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostMissingData $postMissingData)
    {
        //
    }
}
