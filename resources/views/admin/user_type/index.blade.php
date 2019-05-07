@extends('admin.layout.master')



@section('content')
<h1 class="h3 mb-4 text-gray-800">หมวดหมู่สินค้า

</h1>

<div class="card shadow ">
    <div class="card-heading">
        <div class="container mt-3">
            <h4 class="card-title">รายการหมวดหมู่สินค้า</h4>
            <span class="float-right"><a href="/admin/usertype/create" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>
                เพิ่มหมวดหมู่สินค้า</a></span>
        </div>

    </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ชื่อ หมวดหมู่สินค้า</th>
                            <th>จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usertypes as $usertype)
                        <tr>
                            <td>{{$usertype->id}}</td>
                            <td>{{$usertype->name}}</td>
                            <td>
                                <div class="button-group">
                                    <a href="/admin/usertype/{{$usertype->id}}/edit" class="btn btn-warning btn-sm"><i
                                            class="fa fa-edit"></i></a>
                                    
                            <a href="javaScript: deleteItem('{{$usertype->id  }}')" class="btn  btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@section('script')
        <<script>
        var deleteItem = function deleteItem(id) {

                swal.fire({
                    title: "แน่ใจหรือไม่ ?",
                    text: "คุณต้องการลบข้อมูลนี้จริงหรือไม่ ?",
                    type: "warning",
                    showCancelButton: true,
                }).then(function (result) {
                    if (result.value) {
                        axios.delete('/admin/usertype/' + id).then(function (response) {
                            window.location.href = "/admin/usertype/";
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
