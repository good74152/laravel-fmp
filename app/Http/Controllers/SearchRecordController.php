<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MissingData;
use DB;

class SearchRecordController extends Controller
{
    //
    public function index(){
      return view('record');
    }

    public function search(Request $request){
          $date1=$request->date1;
          $date2=$request->date2;
          $place=$request->place;
          $name=$request->name;

            if($place==null){
              if($name==null){
                $search_other=MissingData::whereBetween('OP_PU_DATE',[$date1,$date2])->get();
              }else{
                $search_other=MissingData::whereBetween('OP_PU_DATE',[$date1,$date2])
                                            ->where('OP_AN_CONTENT','like','%'.$name.'%')
                                            ->get();
              }

            }
            else{
              if($name==null){
                $search_other=MissingData::whereBetween('OP_PU_DATE',[$date1,$date2])
                                            ->where('OP_PU_PLACE','like','%'.$place.'%')
                                            ->get();
              }else{
                $search_other=MissingData::whereBetween('OP_PU_DATE',[$date1,$date2])
                                            ->where('OP_AN_CONTENT','like','%'.$name.'%')
                                            ->where('OP_PU_PLACE','like','%'.$place.'%')
                                            ->get();
              }

            }

            return back()
              ->with('search_other',$search_other);
          }

          public function getData(Request $request){
            return $request->all();
          }


}
