@extends('admin.layout.master')

@section('content')


<h1 class="h3 mb-4 text-gray-800">ข่าว</h1>
<div class="card">
    <div class="card-heading">
        <div class="container mt-3">
            <h4 class="card-title">เพื่มรายการ ข่าว</h4>
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
            <form action="/admin/article/{{$article->id}}" method="POST" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="inputClientTypeId">เลือกหมวดหมู่ </label>
                    <select name="category_id" id="inputClientTypeId" class="form-control">
                        @foreach($categorys as $category)
                        <option @if($category->id == $article->category_id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputFullname">ชื่อเรื่อง ข่าว</label>
                    <input  value="{{$article->title}}" type="text" class="form-control" name="title"  required placeholder="">
                </div>

                <div class="tab-content">
                    <div class="tab-pane active" id="th">
                        <div class="form-group">
                            <label><i class="fa fa-image"></i> รูปภาพ ข่าว</label>
                            <div class="form-group">
                                <input name="thumbnail" type="file">
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="inputFullname">เนื้อหาข่าวสั้นๆ</label>
                                <input type="text" class="form-control" name="description" value="{{$article->description}}  required placeholder="">
                            </div>

                    <textarea id="summernote" name="detail"  >{{$article->detail}}</textarea>
                        <div class="mt-3">
                        <button class="btn btn-warning" id="btnsmt" type="submit">บันทึก</button>
                    </div>
        @endsection
@section('script')
<script>
$(document).ready(function() {
    $('#summernote').summernote({

      });
  });
</script>
@endsection
