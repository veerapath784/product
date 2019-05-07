@extends('admin.layout.master')

@section('content')
<h1 class="h3 mb-4 text-gray-800">ผู้ใช้
</h1>
<div class="card shadow ">
    <div class="card-heading">
        <div class="container mt-5">
            <h4 class="card-title">รายการผู้ใช้</h4>
            <span class="float-right"><a href="/admin/user/create" class="btn btn-sm btn-success"><i
                        class="fa fa-plus"></i>
                    เพิ่มผู้ใช้</a></span>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered ">
                <thead>
                <tr>
                    <th  class="text-center">#</th>
                    <th  class="text-center">ชื่อ</th>
                    <th  class="text-center">อีเมล</th>
                    <th  class="text-center" width="500">ที่อยู่</th>
                    <th  class="text-center">เบอร์โทร</th>
                    <th  class="text-center">จัดการ</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td class="text-center">{{$user->id}}</td>
                        <td class="text-center">{{$user->fullname}}</td>
                        <td class="text-center">{{$user->email}}</td>
                        <td>{{$user->address}}</td>
                        <td class="text-center">{{$user->phone}}</td>
                        <td class="text-center">
                            <div class="button-group">
                                <a href="/admin/user/{{$user->id}}/edit" class="btn btn-warning btn-sm"><i
                                        class="fa fa-edit"></i></a>

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
    </div>
@endsection
</div>
@endsection
