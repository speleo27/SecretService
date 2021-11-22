<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;
use App\Models\MissionInfo;
use App\Models\MissionTypes;
use Illuminate\Support\Facades\DB;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $missions=Mission::with('type')->paginate(15);
        return view("mission.index", ["missions"=>$missions]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mission=DB::table("mission")
                        ->join("contacts_missions","mission_id","=",'contacts_missions.mission_id')
                        ->join("agents_missions","mission_id","=",'agents_missions.mission_id')
                        ->join("missions_targets","mission_id","=",'missions_targets.mission_id')
                        ->join('missions_safe_houses,"mission_id',"=",'missions_safe_houses.mission_id')
                        ->where("mission_id","=",$id)
                        ->select("mission.*","agents_missions.agent_id","contacts_missions.contact_id",
                            "missions_targets.target_id","safe_houses.mission_id")
                        ->get();
        dd($mission);
        return view("mission.show",["mission"=>$mission]);
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
