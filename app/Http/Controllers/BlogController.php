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
        return  $req;
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
            if ($request->hasFile(('images'))) {
                $sendToUpload =  $this->saveImage($request, 'blog', 'images', [600, 400]);
                $request->images = $sendToUpload;
                $save = blog::inToArray($request);
                $isSave = blog::create($save);
                return $isSave;
            } else {
                return "no image";
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
    public function update(Request $request,  $blog)
    {
        // check Image 
        try {
            // return $blog->images;
            if ($request->hasFile(('images'))) {
                return "have image";
            } else {
                return "have no image";
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
        // if have image delete image 
        // upload image 

        return $blog;
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
    public function saveImage(Request $request, $path, $imageNmae, $size)
    {
        $dir = public_path('uploads/' . $path);
        $file = $request->file($imageNmae);
        $ImageType = $file->getClientOriginalExtension();
        $ImagFileName = time() . '.' . $ImageType;
        $saveImage = Image::make($file->path())->resize($size[0], $size[1])->save($dir . '/' . $ImagFileName);
        if ($saveImage) {
            return "uploads/" . $path . '/' . $ImagFileName;
        } else {
            return $ImagFileName;
        }
    }

    public function updateBlog(Request $request,  $id)
    {
        $query = blog::where('id', $id)->get()[0];
        try {
            if ($request->hasFile(('images'))) {
                unlink($query->images);
                $sendToUpload =  $this->saveImage($request, 'blog', 'images', [600, 400]);
                $request->images = $sendToUpload;
                $save = blog::inToArray($request);
                $isSave = $query->update($save);
                return $isSave;
            } else {
                return "have no image";
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
