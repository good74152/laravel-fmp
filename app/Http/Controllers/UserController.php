<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostMissingData;
use App\MissingData;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $user = Auth::user();
      $city=$user->subscribe_city;
      $thingname=$user->subscribe_thingname;
      $nowdate = date("Ymd");


      if($city==null){
        if($thingname==null){
          $search_other=MissingData::where('OP_PU_DATE','like','%'.'00000000'.'%')->get();
        }else{
          $search_other=MissingData::where('OP_PU_DATE','like','%'.$nowdate.'%')
                                      ->where('OP_AN_CONTENT','like','%'.$thingname.'%')
                                      ->get();
        }

      }
      else{
        if($thingname==null){
          $search_other=MissingData::where('OP_PU_DATE','like','%'.$nowdate.'%')
                                      ->where('OP_PU_PLACE','like','%'.$city.'%')
                                      ->get();
        }else{
          $search_other=MissingData::where('OP_PU_DATE','like','%'.$nowdate.'%')
                                      ->where('OP_AN_CONTENT','like','%'.$thingname.'%')
                                      ->where('OP_PU_PLACE','like','%'.$city.'%')
                                      ->get();
        }

      }
      return view('userprofile', with(['user' => $user, 'search_other' => $search_other]));
    }
    // whereBetween('OP_PU_DATE',[$date1,$date2])

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
      $user = Auth::user();
      $user->name = $request->username;
      // if($request->subscribe_city != null){
        $user->subscribe_city = $request->subscribe_city;
      // }
      // if($request->subscribe_thingname != null){
        $user->subscribe_thingname = $request->subscribe_thingname;
      // }
      $user->save();

      $user = Auth::user();
      $city=$user->subscribe_city;
      $thingname=$user->subscribe_thingname;
      //$nowdate = date("Ymd");
      $nowdate = 20191226;


        if($city==null){
          if($thingname==null){
            $search_other=MissingData::where('OP_PU_DATE','like','%'.'00000000'.'%')->get();
          }else{
            $search_other=MissingData::where('OP_PU_DATE','like','%'.$nowdate.'%')
                                        ->where('OP_AN_CONTENT','like','%'.$thingname.'%')
                                        ->get();
          }

        }
        else{
          if($thingname==null){
            $search_other=MissingData::where('OP_PU_DATE','like','%'.$nowdate.'%')
                                        ->where('OP_PU_PLACE','like','%'.$city.'%')
                                        ->get();
          }else{
            $search_other=MissingData::where('OP_PU_DATE','like','%'.$nowdate.'%')
                                        ->where('OP_AN_CONTENT','like','%'.$thingname.'%')
                                        ->where('OP_PU_PLACE','like','%'.$city.'%')
                                        ->get();
          }

        }

      return view('userprofile', with(['user' => $user , 'search_other' => $search_other ]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
