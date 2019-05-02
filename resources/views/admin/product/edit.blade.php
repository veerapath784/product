@extends('admin.layout.master')
@section('content')
<h1 class="h3 mb-4 text-gray-800">สินค้า</h1>
<div class="card shadow ">
    <div class="card-heading">
        <div class="container mt-3">
            <h4 class="card-title">เพื่มรายการสินค้า</h4>
        </div>
        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

        <form action="/admin/product/{{$product->id}}" method="POST" enctype="multipart/form-data">
            @method('patch')
                @csrf

                <div class="form-group">
                        <label for="inputClientTypeId">เลือกหมวดหมู่ </label>
                        <select name="category_id" id="inputClientTypeId" class="form-control">
                            @foreach($categorys as $category)
                            <option @if($category->id == $product->category_id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                <div class="form-group mt-3">
                    <label for="selectUserType">รูปภาพสินค้า</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="thumbnail">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputFullname">ชื่อ สินค้า</label>
                <input type="text" class="form-control" name="name" id="inpuName" value="{{$product->name}}" required placeholder="กรอกชื่อ สินค้า">
                </div>
                <div class="form-group">
                    <label for="quantity">จำนวน สินค้า</label>
                    <input type="number" min="0" class="form-control" name="quantity" value="{{$product->quantity}}" id="inputQuantity" required placeholder="กรอกชื่อ สินค้า">
                </div>

                <div class="form-group shadow-textarea">
                    <label for="exampleFormControlTextarea6">รายละเอียดสินค้า</label>
                <textarea class="form-control z-depth-1" id="inpuDetail" rows="6" name="detail" placeholder="กรอกรายละเอียดสินค้า">{{$product->detail}}</textarea>
                </div>
                <div class="form-group">
                    <label for="quantity">ราคา สินค้า</label>
                    <input type="number" min="0" class="form-control" name="price" value="{{$product->price}}" id="inputPrice" required placeholder="กรอกราคา สินค้า">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่มสินค้า</button>
            </form>
        </div>
    </div>
</div>
@endsection
