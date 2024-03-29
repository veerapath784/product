@extends('admin.layout.master')

@section('content')
<h1 class="h3 mb-4 text-gray-800">สินค้า
</h1>
<div class="card shadow ">
    <div class="card-heading">
        <div class="container mt-5">
            <h4 class="card-title">รายการสินค้า</h4>
            <span class="float-right"><a href="/admin/product/create" class="btn btn-sm btn-success"><i
                        class="fa fa-plus"></i>
                    เพิ่มสินค้า</a></span>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table  class="table table-bordered ">
                <thead>
                <tr>
                    <th  class="text-center">#</th>
                    <th  class="text-center">รหัสสินค้า</th>
                    <th style="width: 350px;" class="text-center">รูปสินค้า</th>
                    <th style="width: 150px;"  class="text-center">ชื่อ สินค้า</th>
                    <th  class="text-center">จำนวน</th>
                    <th  class="text-center" width="500">รายละเอียด</th>
                    <th  class="text-center">ราคา</th>
                    <th style="width: 150px;" class="text-center">จัดการ</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td class="text-center">{{$product->id}}</td>
                        <td class="text-center">{{$product->code}}</td>
                        <td class="text-center"><img width="50%;" src="{{$product->thumbnail}}" alt="{{$product->name}}"></td>
                        <td class="text-center">{{$product->name}}</td>
                        <td class="text-center">{{$product->quantity}}</td>
                        <td>{{$product->detail}}</td>
                        <td class="text-center">{{$product->price}}</td>
                        <td class="text-center" >
                            <div class="button-group">
                                <a href="/admin/product/{{$product->id}}/edit" class="btn btn-warning btn-sm"><i
                                        class="fa fa-edit"></i></a>

                                <a href="javaScript: deleteItem('{{$product->id  }}')" class="btn  btn-danger btn-sm">
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
    </div>
@endsection
</div>
@endsection
