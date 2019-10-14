<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Requestinput;
use App\Activity;
use App\User;
use App\Result;
use DB;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Activitys = Activity::orderBy('id','DESC')->paginate(3);
        return view('Activity',compact('Activitys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $activity =  Activity::find(1);
        $dayActivity = DB::table('activities')
                     ->select(DB::raw('count(*) as user_count, active'))
                     ->groupBy('active')
                     ->where('active', '=', 1)
                     ->get();
       

        $response = $request->input('customRadio');
        
        
        $activity = $activity->ansewer;
        
        if ($response==$activity) {
            $Points=10;
        }else if ($response==null) {
            $response = "x";
            $Points = 0;
        }else{
            $Points = 0;
        }
        $Result = new Result;
        $Result->response = $response;
        $Result->users_id = auth()->id();
        $Result->activities_id = $request->input('activity');
        $Result->Points = $Points;
        $Result->save();
       
        
        return redirect()->route('home');
      
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
