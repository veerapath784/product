<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Aqpp\Http\Controllers\Controller;
use App\Fbpage;

class FbpageController extends Controller
{
    protected $rules = [
        'link' => 'required',

    ];

    protected $path = "/admin/fb_page";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.fb_page.index', [
            'fbpages' => Fbpage::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fb_page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->rules);
        $fbpage = new Fbpage();
        $fbpage->link = $request->input('link');
        $fbpage->save();
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
        $fbpage = Fbpage::find($id);
        $data = [
            'fbpage' => $fbpage
        ];
        return view('admin.fb_page.edit', $data);
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
        $request->validate($this->rules);
        $fbpage = Fbpage::find($id);
        $fbpage->link = $request->input('link');
        $fbpage->save();
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
        $fbpage = \App\Fbpage::find($id);
        $fbpage->delete();
        return response()->json();
    }
}
