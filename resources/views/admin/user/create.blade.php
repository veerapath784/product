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

            <form action="/admin/user" method="POST">
                @csrf
                <div class="form-group">
                    <label for="selectUserType">เลือกประเภทผู้ใช้งาน</label>
                    <select name="user_type_id" id="selectUserType" class="form-control">
                        @foreach($userTypes as $userType)
                    <option value="{{ $userType->id }}">{{$userType->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputFullname">ชื่อ - สกุล</label>
                    <input type="text" class="form-control" name="fullname" id="inpuFullname" required placeholder="กรอกชื่อ-สกุล">
                </div>
                <div class="form-group">
                    <label for="inputEmail">อีเมล์</label>
                    <input type="email" class="form-control" name="email" id="inpuEmail" placeholder="กรอกอีเมล์" required>
                </div>
                <div class="form-group">
                    <label for="inputPassword">รหัสผ่าน</label>
                    <input type="password" class="form-control" name="password" id="inputPassword" placeholder="กรอกรหัสผ่าน" required>
                </div>
                <div class="form-group">
                    <label for="inputConfirmPassword">ยืนยันรหัสผ่าน</label>
                    <input type="password" class="form-control" name="password_confirmation" id="inputConfirmPassword" placeholder="กรอกรหัสผ่านอกครั้ง"
                        required>
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> เพิ่มผู้ใช้งาน</button>
            </form>
        </div>
    </div>
</div>
@endsection
