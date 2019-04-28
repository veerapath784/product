@extends('admin.layout.master')
@section('content')
<div class="card">
    <div class="card-header"><i class="fa fa-cogs"></i>แก้ไขข้อมูล</div>
    <div class="card-body">
        <h4>โปรดกรอกข้อมูลให้ครบถ้วน</h4>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/admin/user/{{$user->id}}" method="post">
            @method('patch') @csrf
            <div class="form-group">
                <label for="selectUserType">เลือกประเภทผู้ใช้งาน</label>
                <select name="user_type_id" id="selectUserType" class="form-control">
                     @foreach($userTypes as $userType)
                <option @if($userType->id == $user->user_type_id) selected @endif value="{{$userType->id}}">{{$userType->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="inputFullname">ชื่อ - สกุล</label>
                <input type="text" class="form-control" name="fullname" id="inpuFullname" required value="{{$user->fullname}}">
            </div>
            <div class="form-group">
                <label for="inputEmail">อีเมล์</label>
                <input type="email" class="form-control" name="email" id="inpuEmail" value="{{$user->email}}" required>
            </div>
            <div class="form-group">
                <label for="inputPassword">รหัสผ่าน</label>
                <input type="password" class="form-control" name="password" id="inputPassword" value="{{$user->password}}" required>
            </div>
            <div class="form-group">
                <label for="inputConfirmPassword">ยืนยันรหัสผ่าน</label>
                <input type="password" class="form-control" name="password_confirmation" id="inputConfirmPassword" value="{{$user->password}}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary btn-sm"><i class=" fa fa-edit"></i> แก้ไขผู้ใช้งาน</button>



        </form>
@endsection
