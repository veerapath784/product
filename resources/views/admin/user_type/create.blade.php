@extends('admin.layout.master')
@section('content')
<h1 class="h3 mb-4 text-gray-800">ผู้ใช้งาน</h1>
<div class="card">
    <div class="card-heading">
        <h4 class="card-title">รายการผู้ใช้งาน</h4>
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

            <form action="/admin/userType" method="POST">
                @csrf

                <div class="form-group">
                    <label for="inputFullname">ชื่อ - สกุล</label>
                    <input type="text" class="form-control" name="name" id="inpuFullname" required placeholder="กรอกชื่อสิทธิ์ การเข้าถึง">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่มผู้ใช้งาน</button>
            </form>
        </div>
    </div>
</div>
@endsection
