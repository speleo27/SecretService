<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Nationality;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts= Contact::paginate(15);
        //dd($contacts);
        return view("contact.index",["contacts"=>$contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nationality=Nationality::all();
        return view("contact.create",["nationality"=>$nationality]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact= new Contact();
        $contact->contact_firstname= $request->contact_firstname;
        $contact->contact_lastname= $request->contact_lastname;
        $contact->contact_birthday= $request->contact_birthday;
        $contact->nationality_id= $request->nationality;
        $contact->contact_pseudo= $request->contact_pseudo;
        $contact->save();
        return redirect()->route("contact.index");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact=Contact::find($id);
        return view("contact.show",["contact"=>$contact]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact=Contact::find($id);
        $nationality=Nationality::all();
        return view("contact.edit",["contact"=>$contact, "nationality"=>$nationality]);

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
        $contact=Contact::find($id);
        $contact->nationality_id= $request->nationality;
        $contact->contact_pseudo= $request->contact_pseudo;
        $contact->save();
        return redirect()->route("contact.show",$contact->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('contact.index');
    }
}
