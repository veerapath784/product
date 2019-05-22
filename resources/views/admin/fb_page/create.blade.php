@extends('admin.layout.master')
@section('content')
<h1 class="h3 mb-4 text-gray-800">เพจเฟสบุ๊ค</h1>
<div class="card shadow ">
    <div class="card-heading">
        <div class="container mt-3">
            <h4 class="card-title">เพื่มรายการ เพจเฟสบุ๊ค</h4>
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

            <form action="/admin/fb_page" method="POST" ">
                @csrf

                <div class="form-group">
                    <label>URl เพจเฟสบุ๊ค<span class="pull-right">&nbsp;</span></label>

                    <div class="input-group mb-3">
                        <input class="form-control" placeholder="เช่น http://..." name="link" type="text">
                </div>

                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> บันทึกข้อมูล</button>
            </form>
        </div>
    </div>
</div>
@endsection
