@extends('admin.layout.master')
@section('content')
<h1 class="h3 mb-4 text-gray-800">ข่าวสาร</h1>
<div class="card shadow ">
    <div class="card-heading">
        <div class="container mt-3">
            <h4 class="card-title">เพื่มรายการข่าวสาร</h4>
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
                    <label for="inputName">ชื่อ หมวดหมู่ข่าวสาร</label>
                    <input type="text" class="form-control" name="name" id="inpuName" value="{{$category->name}}" required placeholder="กรอกชื่อ หมวดหมู่ข่าวสาร">
                </div>

                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่มหมวดหมู่ข่าวสาร</button>
            </form>
        </div>
    </div>
</div>
@endsection
