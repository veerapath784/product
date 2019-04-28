@extends('admin.layout.master')
@section('content')
<h1 class="h3 mb-4 text-gray-800">ผู้ใช้งาน
    <span class="float-right"><a href="/admin/user/create" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> เพิ่มผู้ใช้งาน</a></span>
</h1>

<div class="card">
    <div class="card-heading">
        <h4 class="card-title">รายการผู้ใช้งาน</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ประเภทผู้ใช้งาน</th>
                    <th>ชื่อ - สกุล</th>
                    <th>อีเมล์</th>
                    <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->userType->name}}</td>
                    <td>{{$user->fullname}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <div class="button-group">
                            <a href="#" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fa fa-times"></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
