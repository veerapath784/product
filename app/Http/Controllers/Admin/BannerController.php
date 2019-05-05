<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUpload;
use App\Banner;

class BannerController extends Controller
{   

    protected $rules = [
        'title' => 'required',
        'thumbnail' => 'required|file',
        'start' => 'required|min:5',
        'end' => 'required',
        'start' => 'required',
        'link' => 'required'
    ];
    protected $path = "/admin/banner";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.banner.index', [
            'banners' => Banner::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName = "https://via.placeholder.com/450x580";
        if (request()->has('thumbnail')) {
            $imageUpload = new ImageUpload(request()->file('thumbnail'), '/images/banner');

            $imageName = $imageUpload->execute();
        }

        $request->validate($this->rules);
        $banner = new Banner();
        $banner->title = $request->input('title');
        $banner->thumbnail = $imageName;

        $banner->start = $request->input('start');
        $banner->end = $request->input('end');
        $banner->link = $request->input('link');
        $banner->save();
        return redirect($this->path);
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
        
        $banner = Banner::find($id);
        $data = [
            'banner' => $banner
        ];
        return view('admin.banner.edit', $data);
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
        $imageName = "https://via.placeholder.com/450x580";
        if (request()->has('thumbnail')) {
            $imageUpload = new ImageUpload(request()->file('thumbnail'), '/images/banner');

            $imageName = $imageUpload->execute();
        }

        $request->validate($this->rules);
        $banner = Banner::find($id);
        $banner->title = $request->input('title');
        $banner->thumbnail = $imageName;

        $banner->start = $request->input('start');
        $banner->end = $request->input('end');
        $banner->link = $request->input('link');
        $banner->save();
        return redirect($this->path);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = \App\Banner::find($id);
        $product->delete();
        return response()->json();
    }
}
