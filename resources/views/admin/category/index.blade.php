@extends('admin.layout.master')
@section('content')
<h1 class="h3 mb-4 text-gray-800">หมวดหมู่สินค้า
    <span class="float-right"><a href="/admin/category/create" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> เพิ่มหมวดหมู่สินค้า</a></span>
</h1>

<div class="card">
    <div class="card-heading">
        <div class="container mt-3">
            <h4 class="card-title">รายการหมวดหมู่สินค้า</h4>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ชื่อ หมวดหมู่สินค้า</th>
                    <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorys as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        <div class="button-group">
                                    <a href="/admin/category/{{$category->id}}/edit" class="btn btn-warning btn-sm"><i
                                            class="fa fa-edit"></i></a>
                                    <a href="javaScript: deleteItem('{{$category->id  }}')"
                                        class="btn  btn-danger btn-sm">
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
                        axios.delete('/admin/product/' + id).then(function (response) {
                            window.location.href = "/admin/product/";
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
