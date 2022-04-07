<?php

namespace App\Http\Controllers;

use App\Models\BranchMaster;
use Illuminate\Http\Request;

class BranchMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = BranchMaster::paginate(100);
        return view('branches.index')->with(['branches'=>$branches]);
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
     * @param  \App\Models\BranchMaster  $branchMaster
     * @return \Illuminate\Http\Response
     */
    public function show(BranchMaster $branchMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BranchMaster  $branchMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(BranchMaster $branchMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BranchMaster  $branchMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BranchMaster $branchMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BranchMaster  $branchMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(BranchMaster $branchMaster)
    {
        //
    }
}
