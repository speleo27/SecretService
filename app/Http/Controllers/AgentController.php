<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Nationality;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents=Agent::paginate(15);
        //dd($agents);
        return view("agent.index",["agents"=>$agents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nationality=Nationality::all();
        $specialities=Speciality::all();
        return view("agent.create",["nationality"=>$nationality, "specialities"=>$specialities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agent=new Agent();
        $agent->agent_immat= Str::uuid()->toString();
        $agent->agent_firstname= $request->agent_firstname;
        $agent->agent_lastname= $request->agent_lastname;
        $agent->agent_birthday= $request->agent_birthday;
        $agent->nationality_id= $request->nationality_id;
        $agent->save();
        return redirect()->route("agent.index");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
   // TODO: find why when request with an uuid the resultat is wrong
    public function show($id)
    {

        $agent=Agent::find($id);
        //dd($agent->id);
        //foreach ($agent->specialities as $spec){
            //dump($spec->speciality_name);
            return view("agent.show",["agent"=>$agent]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agent=Agent::find($id);
        $nationality=Nationality::all();
        $specialities=Speciality::all();

        //dd($specialities);
        return view("agent.edit",["agent"=>$agent,"nationality"=>$nationality, "specialities"=>$specialities]);

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
        $agent=Agent::find($id);
        $agent->nationality_id= $request->nationality_id;
        $agent->save();
        return redirect()->route("agent.show");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agent=Agent::find($id);
        $agent->delete();
        return redirect()->route("agent.index");
    }
}
