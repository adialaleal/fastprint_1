<?php

namespace fastprint\Http\Controllers;

use Request;
use fastprint\Jobs;
use Illuminate\Support\Facades\DB;
use fastprint\Http\Requests\JobsRequest;


class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'layout.index'
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('layout.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobsRequest $request)
    {
        Jobs::create($request->all());
        return redirect()
        ->action('JobsController@create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \fastprint\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function show(Jobs $jobs)
    {
        $job = Jobs::all();
        return view('layout.list')->with('fastjob.printfast', $job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \fastprint\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobs $jobs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \fastprint\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobs $jobs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \fastprint\Jobs  $jobs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobs $jobs)
    {
        //
    }

    public function json(){
        $jobs = DB::select('SELECT * FROM fastjob.printfast');
        return response()->json($jobs);
    }
}
