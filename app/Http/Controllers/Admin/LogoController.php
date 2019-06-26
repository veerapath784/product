<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUpload;
use App\Logo;

class LogoController extends Controller
{

    protected $rules = [

        'thumbnail' => 'required|file',

    ];
    protected $path = "/admin/logo";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.logo.index', [
            'logos' => Logo::orderBy('id','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.logo.create');
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
            $imageUpload = new ImageUpload(request()->file('thumbnail'), '/images/logo');
            $imageUpload->width = 1900;
            $imageUpload->upload();
            $imageUpload->resize('aspect');
            $imageName = $imageUpload->save();
        }

        $request->validate($this->rules);
        $logo = new Logo();
        $logo->thumbnail = $imageName;
        $logo->save();
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
        $logo = Logo::find($id);
        $data = [
            'logo' => $logo
        ];
        return view('admin.logo.edit', $data);
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
            $imageUpload = new ImageUpload(request()->file('thumbnail'), '/images/logo');
            $imageUpload->width = 1900;
            $imageUpload->upload();
            $imageUpload->resize('aspect');
            $imageName = $imageUpload->save();
        }

        $request->validate($this->rules);
        $logo = logo::find($id);
        $logo->thumbnail = $imageName;
        $logo->save();
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
        $logo = \App\Logo::find($id);
        $logo->delete();
        return response()->json();
    }
}
