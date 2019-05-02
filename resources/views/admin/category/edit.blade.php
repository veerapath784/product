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

            <form action="/admin/category/{{$category->id}}" method="POST">
                @method('patch')
                @csrf

                <div class="form-group">
                    <label for="inputName">ชื่อ หมวดหมู่สินค้า</label>
                    <input type="text" class="form-control" name="name" id="inpuName" value="{{$category->name}}" required placeholder="กรอกชื่อ หมวดหมู่สินค้า">
                </div>

                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่มหมวดหมู่สินค้า</button>
            </form>
        </div>
    </div>
</div>
@endsection
