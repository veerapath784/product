@extends('admin.layout.master')

@section('content')
<h1 class="h3 mb-4 text-gray-800">logo
</h1>
<div class="card shadow ">
    <div class="card-heading">
        <div class="container mt-3">
            <h4 class="card-title">รายการ logo</h4>
            <span class="float-right"><a href="/admin/logo/create" class="btn btn-sm btn-success"><i
                        class="fa fa-plus"></i>
                    เพิ่ม logo</a></span>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered ">
                <tr  class="text-center">
                    <th>#</th>
                    <th>รูปภาพ Logo</th>
                    {{-- <th>รายละเอียดข่าว</th> --}}
                    <th width="100">จัดการ</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($logos as $logo)
                    <tr class="text-center">
                        <td>{{$logo->id}}</td>
                        <td class="text-center"><img src="{{$logo->thumbnail}}" alt="{{$logo->name}}" width="50" ></td>


                        <td >
                            <div class="button-group">
                                <a href="/admin/logo/{{$logo->id}}/edit" class="btn btn-warning btn-sm"><i
                                        class="fa fa-edit"></i></a>

                                <a href="javaScript: deleteItem('{{$logo->id}}')" class="btn  btn-danger btn-sm">
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
                                axios.delete('/admin/logo/' + id).then(function (response) {
                                    window.location.href = "/admin/logo/";
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
    </div>
</div>
</div>

@endsection
