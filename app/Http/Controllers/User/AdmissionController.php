<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Model\User\Admission;
use App\Http\Controllers\Controller;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.admission');
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
        $validator = $this->validate($request,[
            'kind' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:admissions',
            'phone' => 'required|min:9|max:14|unique:admissions',
            'birthday' => 'required',
            'lieu' => 'required',
            'adresse' => 'required',
            'informatic' => 'required|boolean',
            'computer' => 'required|boolean',
        ]);
         
     
        // dd($request->all());

        $adminssion = new Admission;
        $adminssion->kind = $request->kind;
        $adminssion->firstname = $request->firstname;
        $adminssion->lastname = $request->lastname;
        $adminssion->email = $request->email;
        $adminssion->phone = $request->phone;
        $adminssion->birthday = $request->birthday;
        $adminssion->city_of_both = $request->lieu;
        $adminssion->address = $request->adresse;
        $adminssion->informatic = $request->informatic;
        $adminssion->computer = $request->computer;
        $adminssion->save();
        // $post->tags()->sync($request->niveaux);
        return redirect(route('admission.index'))->with('message','Votre message a eteenregistre avec succe');

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
