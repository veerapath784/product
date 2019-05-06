@extends('admin.layout.master')
@section('content')
<h1 class="h3 mb-4 text-gray-800">ผู้ใช้งาน
    <span class="float-right"><a href="/admin/user/create" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> เพิ่มผู้ใช้งาน</a></span>
</h1>

<div class="card">
    <div class="card-heading">
        <div class="container mt-3">
            <h4 class="card-title">รายการผู้ใช้งาน</h4>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ประเภทผู้ใช้งาน</th>
                    <th>ชื่อ - สกุล</th>
                    <th>อีเมล์</th>
                    <th>เบอร์ติดต่อ</th>
                    <th>ที่อยู่</th>
                    <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->user_type_id}}</td>
                    <td>{{$user->fullname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->address}}</td>
                    <td>
                        <div class="button-group">
                            <a href="/admin/user/{{$user->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>

                            <a href="javaScript: deleteItem('{{$user->id  }}')" class="btn  btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>


@section('script')
    <script>
        var deleteItem = function deleteItem(id) {

                swal.fire({
                    title: "แน่ใจหรือไม่ ?",
                    text: "คุณต้องการลบข้อมูลนี้จริงหรือไม่ ?",
                    type: "warning",
                    showCancelButton: true,
                }).then(function (result) {
                    if (result.value) {
                        axios.delete('/admin/user/' + id).then(function (response) {
                            window.location.href = "/admin/user/";
                        }).catch(function (error) {
                            console.log(error.response)
                            swal('เกิดข้อผิดพลาด', 'ไม่สามารถลบข้อมูลได้ \n ' + error.response.statusText,
                                'error');
                        });
                    }
                })


            }
    </script>
@endsection


</div>
@endsection
