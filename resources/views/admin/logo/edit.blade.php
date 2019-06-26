@extends('admin.layout.master')

@section('content')
<h1 class="h3 mb-4 text-gray-800">logo</h1>
<div class="card">
    <div class="card-heading">
        <div class="container mt-3">
            <h4 class="card-title">เพื่มรายการ logo</h4>
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

            <form action="/admin/logo/{{$logo->id}}" method="POST" enctype="multipart/form-data">
                @method('patch')
                    @csrf


                <div class="tab-content">
                    <div class="tab-pane active" id="th">
                        <div class="form-group">
                            <label><i class="fa fa-image"></i> รูป logo</label>

                            <div class="form-group">
                                <input name="thumbnail" type="file">
                            </div>
                        </div>

                            </div>


                    <button class="btn btn-success" id="btnsmt" type="submit">บันทึก</button>
                </div>


@endsection
