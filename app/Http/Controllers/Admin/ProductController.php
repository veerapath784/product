<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Helpers\ImageUpload;

class ProductController extends Controller
{


    protected $rules = [
        'name' => 'required',
        'quantity' => 'required',
        'detail' => 'required|min:5',
        'price' => 'required'
    ];

    protected $path = "/admin/product";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.index', [
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
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
                $imageUpload = new ImageUpload(request()->file('thumbnail'), '/images/img');

                $imageName = $imageUpload->execute();
               }

        $request->validate($this->rules);
        $product = new Product();
        $product->name = $request->input('name');
        $product->category_id = 1;
        $product->thumbnail = $imageName;

        $product->quantity = $request->input('quantity');
        $product->detail = $request->input('detail');
        $product->price = $request->input('price');
        $product->save();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = \App\Product::find($id);
        $product->delete();
        return response()->json();
    }
}
