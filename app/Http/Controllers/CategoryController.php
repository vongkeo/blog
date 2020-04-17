<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ResponseController as Res;
use App\Model\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fetch = category::latest()->get();
        return Res::success($fetch);
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
        try {
            $req = category::create($request->all());
            return Res::success($req);
        } catch (\Throwable $th) {
            return Res::error($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        return Res::success($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        try {
            $req = $category->update($request->all());
            return Res::output($req);
        } catch (\Throwable $th) {
            return Res::error($th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        try {
            $req = $category->delete();
            return Res::output($req);
        } catch (\Throwable $th) {
            return Res::error($th->getMessage());
        }
    }
}
