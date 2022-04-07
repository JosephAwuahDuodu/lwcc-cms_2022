<?php

namespace App\Http\Controllers;

use App\Models\MemberInfo;
use App\Models\MemberMaster;
use Illuminate\Http\Request;

class MemberMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MemberMaster $members)
    {
        $members = MemberMaster::with('member_info')->paginate(100);
        return view('members.index')->with(['members'=>$members]);
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
     * @param  \App\Models\MemberMaster  $memberMaster
     * @return \Illuminate\Http\Response
     */
    public function show(MemberMaster $memberMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MemberMaster  $memberMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(MemberMaster $memberMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MemberMaster  $memberMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MemberMaster $memberMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MemberMaster  $memberMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(MemberMaster $memberMaster)
    {
        //
    }
}
