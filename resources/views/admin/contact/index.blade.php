@extends('admin.layout.master')

@section('content')
<h1 class="h3 mb-4 text-gray-800">การติดต่อเรา
</h1>
<div class="card shadow ">
    <div class="card-heading">
        <div class="container mt-3">
            <h4 class="card-title">รายการการติดต่อเรา</h4>
            <span class="float-right"><a href="/admin/contact/create" class="btn btn-sm btn-success"><i
                        class="fa fa-plus"></i>
                    เพิ่ม การการติดต่อเรา</a></span>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered ">
                <tr  class="text-center">
                    <th>#</th>
                    <th >ชื่อร้าน</th>
                    <th>ที่อยู่</th>
                    <th width="120">อีเมล</th>
                    <th width="120">เบอร์ติดต่อ</th>

                    <th width="100">จัดการ</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                    <tr>
                        <td class="text-center">{{$contact->id}}</td>
                        <td class="text-center">{{$contact->title}}</td>
                        <td class="text-center">{{$contact->address}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->phone}}</td>
                        <td class="text-center">
                            <div class="button-group">
                                <a href="/admin/contact/{{$contact->id}}/edit" class="btn btn-warning btn-sm"><i
                                        class="fa fa-edit"></i></a>
{{--
                                <a href="javaScript: deleteItem('{{$contact->id}}')" class="btn  btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </a> --}}
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
                        axios.delete('/admin/contact/' + id).then(function (response) {
                            window.location.href = "/admin/contact/";
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
