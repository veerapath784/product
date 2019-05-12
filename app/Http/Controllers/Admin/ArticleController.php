<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\ImageUpload;
use App\Article;

class ArticleController extends Controller
{

    protected $rules = [
        'title' => 'required',
        'thumbnail' => 'required|file',
    ];
    protected $path = "/admin/article";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.article.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
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
            $imageUpload = new ImageUpload(request()->file('thumbnail'), '/images/article');
            $imageUpload->width = 255;
            $imageUpload->upload();
            $imageUpload->resize('aspect');
            $imageName = $imageUpload->save();

            $request->validate($this->rules);
            $article = new Article();
            $article->title = $request->input('title');
            $article->thumbnail = $imageName;
            $article->user_id = auth()->user()->id ;
            $article->detail = $request->input('detail');
            $article-> save();
            return redirect($this->path);
        }
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

        $article = Article::find($id);
        $data = [
            'article' => $article
        ];
        return view('admin.article.edit', $data);
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
            $imageUpload = new ImageUpload(request()->file('thumbnail'), '/images/article');
            $imageUpload->width = 255;
            $imageUpload->upload();
            $imageUpload->resize('aspect');
            $imageName = $imageUpload->save();
        }
            $request->validate($this->rules);
            $article =  Article::find($id);
            $article->title = $request->input('title');
            $article->thumbnail = $imageName;
            $article->user_id = auth()->user()->id ;
            $article->detail = $request->input('detail');
            $article-> save();
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
