@extends('admin.layout.master')
@section('content')
<h1 class="h3 mb-4 text-gray-800">สินค้า
    <span class="float-right"><a href="/admin/product/create" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> เพิ่มสินค้า</a></span>
</h1>

<div class="card">
    <div class="card-heading">
        <div class="container mt-3">
            <h4 class="card-title">รายการสินค้า</h4>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                   <th>รูปสินค้า</th>
                    <th>ชื่อ สินค้า</th>
                    <th>หมวดหมู่สินค้า</th>
                    <th>จำนวน</th>
                    <th>รายละเอียด</th>
                    <th>ราคา</th>
                    <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td><img src="{{$product->thumbnail}}" alt="{{$product->name}}" width="200"></td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->detail}}</td>
                    <td>{{$product->price}}</td>

                    <td>
                        <div class="button-group">
                            <a href="/admin/product/{{$product->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>

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
@endsection


</div>
@endsection
