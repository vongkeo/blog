<?php

namespace App\Http\Controllers;

use App\Model\blog;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $req = blog::latest()->get();
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
        try {
            if ($request->hasFile('images')) {
                $isSave =   $this->saveImgFormFile($request, 'blog',  'images', [800, 548]);
                // store image 
                $request->images = $isSave;
                $req = blog::inToArray($request);

                $isSave = blog::create($req);
                return $isSave;
            } else {
                return "Have No image";
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        return $blog;
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog)
    {
        //
    }

    public  function saveImgFormFile(Request $request, string $path = 'general/', string $objectName = 'proImage', array $sized = [800, 600])
    {
        try {
            $isSplit = explode(" ", $path);
            if (count($isSplit) > 1) {
                $split_out = $isSplit[0] . $isSplit[1];
            } else {
                $split_out = $isSplit[0];
            }
            $dir = public_path('uploads/' . $split_out);
            exec("mkdir $dir");
            exec("chmod -R 775 $dir");
            $file = $request->file($objectName);
            $filetype = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $filetype;
            // file type is not accepted   
            if (!in_array($filetype, $this->imgAccepted())) return 'This file are not allow' . $filetype;
            $isSave = Image::make($file->path())->resize($sized[0], $sized[1])->save($dir . '/' . $filename);
            if ($isSave)   return 'uploads/' . $split_out . '/' . $filename;
            return $filename;
        } catch (\Exception $ex) {
            throw $ex;
        }
    }

    public  function imgAccepted()
    {
        return ["jpg", "jpeg", "png"];
    }
}
