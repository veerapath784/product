@extends('admin.layout.master')

@section('content')
<h1 class="h3 mb-4 text-gray-800">สินค้า
</h1>
<div class="card shadow ">
    <div class="card-heading">
        <div class="container mt-3">
            <h4 class="card-title">รายการสินค้า</h4>
            <span class="float-right"><a href="/admin/banner/create" class="btn btn-sm btn-success"><i
                        class="fa fa-plus"></i>
                    เพิ่มสินค้า</a></span>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered ">
                <tr>
                    <th>#</th>
                    <th>banner_name</th>
                    <th>images_banner</th>
                    <th>time_start</th>
                    <th>time_end</th>
                    <th>link</th>
                    <th>จัดการ</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($banners as $banner)
                    <tr>
                        <td>{{$banner->id}}</td>
                        <td><img src="{{$banner->thumbnail}}" alt="{{$banner->name}}" width="200"></td>
                        <td>{{$banner->title}}</td>
                        <td>{{$banner->start}}</td>
                        <td>{{$banner->end}}</td>
                        <td>{{$banner->link}}</td>
                        <td>
                            <div class="button-group">
                                <a href="/admin/banner/{{$banner->id}}/edit" class="btn btn-warning btn-sm"><i
                                        class="fa fa-edit"></i></a>

                                <a href="javaScript: deleteItem('{{$banner->id}}')" class="btn  btn-danger btn-sm">
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
                        axios.delete('/admin/banner/' + id).then(function (response) {
                            window.location.href = "/admin/banner/";
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
