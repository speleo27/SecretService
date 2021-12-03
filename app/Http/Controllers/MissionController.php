<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Contact;
use App\Models\Country;
use App\Models\Mission;
use App\Models\SafeHouse;
use App\Models\Speciality;
use App\Models\Status;
use App\Models\Target;
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
        $countries=Country::all();
        $type=MissionTypes::all();
        $statuses=Status::all();
        $specialities=Speciality::all();
        $targets=Target::all();
        $contacts=Contact::all();
        $agents=Agent::all();
        $safeHouses=SafeHouse::all();
        return view("mission.create",compact("countries","type","statuses","specialities","targets","contacts","agents","safeHouses"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $mission=new Mission();
        $mission->title=$request->title;
        $mission->description=$request->description;
        $mission->mission_pseudo=$request->mission_pseudo;

        $mission->country_id=$request->country_id;
        $mission->type_id=$request->type_id;
        $mission->status_id=$request->status_id;
        $mission->speciality_id=$request->speciality_id;
        $mission->date_de_debut=$request->date_de_debut;
        $mission->date_de_fin=$request->date_de_fin;
        $mission->save();
        foreach($request->targets as $target){

        }
        return redirect()->route("mission.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // TODO find how to fix relation error for method show
    public function show($id)
    {
        $mission=Mission::where("id","=",$id)
                        ->get()->first();
        //dd($mission->safe_houses);
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
        $mission=Mission::find($id);

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
        $mission=Mission::find($id);
        $mission->delete();
        return redirect()->route('mission.index');
    }
}
