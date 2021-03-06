<?php

namespace App\Http\Controllers;

use App\iewprofile;
use App\profile;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;

class ViewprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        // $users = User::find(Auth::user()->id);
        $profiles = Profile::find(Auth::user()->id);
        return view('Viewprofile.index',compact('profiles'));
              
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viewprofile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => '',
            'email' => '',
            'number' => 'required',
            'dob' => 'required',
            'qualification' => 'required',
            'specialization' => 'required',
            'marks' => 'required',
            'passout' => 'required',
            'collegeaddress' => 'required',
            'homeaddress' => 'required',
        ]);


        Profile::create($request->all());
        return redirect()->route('viewprofile.index')
                        ->with('success','Profile created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\viewprofile  $viewprofile
     * @return \Illuminate\Http\Response
     */
    public function show(viewprofile $viewprofile)
    {
        $profiles = Profile::find($id);
        return view('viewprofile.show',compact('profiles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\viewprofile  $viewprofile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profiles = Profile::find($id);
        return view('viewprofile.edit',compact('profiles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\viewprofile  $viewprofile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => '',
            'email' => '',
            'number' => '',
            'dob' => '',
            'qualification' => '',
            'specialization' => '',
            'marks' => '',
            'passout' => '',
            'collegeaddress' => '',
            'homeaddress' => '',
        ]);


        Profile::find($id)->update($request->all());
        return redirect()->route('viewprofile.index')
                        ->with('success','Profile updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\viewprofile  $viewprofile
     * @return \Illuminate\Http\Response
     */
    public function destroy(viewprofile $viewprofile)
    {
        //
    }
}
