<?php

namespace App\Http\Controllers;

use App\Model\tags;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $req = tags::latest()->get();
        return $req;
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
        $req = tags::create($request->all());
        return $req;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function show($tags)
    {
      return tags::where('id',$tags)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function edit(tags $tags)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tags)
    {
        $req = tags::where('id', $tags)->get()[0];
        $update = $req->update($request->all());
        return $update;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function destroy($tags)
    {
        $req = tags::where('id', $tags)->get()[0];
        $dele = $req->delete();
        return $dele;
    }
}
