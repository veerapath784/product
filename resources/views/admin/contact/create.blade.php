@extends('admin.layout.master')
@section('content')
<h1 class="h3 mb-4 text-gray-800">ติดต่อเรา</h1>
<div class="card shadow ">
    <div class="card-heading">
        <div class="container mt-3">
            <h4 class="card-title">เพื่มรายการติดต่อเรา</h4>
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

            <form action="/admin/contact" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                    <label for="inputFullname">ชื่อสาขา</label>
                    <input type="text" class="form-control" name="title" id="inpuName" required placeholder="กรอกชื่อ ติดต่อเรา">
                </div>
                <div class="form-group">
                    <label>ลิงค์ (google-maps) <span class="pull-right">&nbsp;</span></label>

                    <div class="input-group">
                        <input class="form-control"
                            placeholder="เช่น http://www.cmru.ac.th/category/1-ข่าวประชาสัมพันธ์.html"
                            name="link" type="text">

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputFullname">อีเมล </label>
                    <input type="text" class="form-control" name="email" id="inpuName" required placeholder="กรอก อีเมล">
                </div>

                <div class="form-group shadow-textarea">
                    <label for="exampleFormControlTextarea6">ที่อยู่</label>
                    <textarea class="form-control z-depth-1" id="inpuDetail" rows="6" name="address" placeholder="กรอกที่อยู่"></textarea>
                </div>
                <div class="form-group">
                    <label for="quantity">เบอร์ติดต่อ</label>
                    <input type="text"  class="form-control" name="phone" id="inputPrice" required placeholder="กรอกราคา เบอร์ติดต่อ">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่มรายการติดต่อเรา</button>
            </form>
        </div>
    </div>
</div>
@endsection
