<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type)
    {
        //

        if($type=='draft'){
            $activities = Activity::where('status',1)->where('user_id',currentUser()->id)->get();
            $title='Gastos en Borrador';
        }else{
            $activities = where('user_id',currentUser()->id)->paginate();
            $title='Mis Gastos Registrados';
        }
        return view('activities.index',compact('activities','title'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('activities.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $activity_id = $request->input('activity_id');
        if(($activity_id==0)) {
            $activity = new Activity();
            $activity->user_id =currentUser()->id;
            $activity->current_approver =$request->input('current_approver');
            $activity->project_id =$request->input('project_id');
            $activity->city_id =$request->input('city_id');
            $activity->status =1;
            $activity->assignment_date =date('Y-m-d');
            $activity->save();

            $activityId= $activity->id;

            $path = userBasePathFileUpload().$activityId;
            mkdir($path, 0777, true);

            return $activityId;

        }else{

        }
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
