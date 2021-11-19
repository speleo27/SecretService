<?php

namespace App\Http\Controllers;

use App\Models\MissionInfo;
use Illuminate\Http\Request;

class MissionInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param int $mission_id
     * @return \Illuminate\Http\Response
     */
    public function show(int $mission_id)
    {
        $info=MissionInfo::find($mission_id);
        dd($info->agent_name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MissionInfo  $missionInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(MissionInfo $missionInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MissionInfo  $missionInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MissionInfo $missionInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MissionInfo  $missionInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(MissionInfo $missionInfo)
    {
        //
    }
}
