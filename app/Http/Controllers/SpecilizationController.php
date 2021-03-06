<?php

namespace App\Http\Controllers;

use App\Models\Specilization;
// use App\Http\Requests\Request;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateSpecilizationRequest;

class SpecilizationController extends Controller
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
        // dd('okk');
        return view('admin-dashboard.speclization-manage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSpecilizationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $specilization=Specilization::create($request->all());
       return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Specilization  $specilization
     * @return \Illuminate\Http\Response
     */
    public function show(Specilization $specilization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Specilization  $specilization
     * @return \Illuminate\Http\Response
     */
    public function edit(Specilization $specilization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSpecilizationRequest  $request
     * @param  \App\Models\Specilization  $specilization
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSpecilizationRequest $request, Specilization $specilization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Specilization  $specilization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specilization $specilization)
    {
        //
    }
}
