@extends('admin.layout.master')



@section('content')
<h1 class="h3 mb-4 text-gray-800">เพจเฟสบุ๊ค

</h1>

<div class="card shadow ">
    <div class="card-heading">
        <div class="container mt-3">
            <h4 class="card-title">รายการ เพื่มรายการ เพจเฟสบุ๊ค</h4>
            <span class="float-right"><a href="/admin/fb_page/create" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>
                เพื่มรายการ เพจเฟสบุ๊ค</a></span>
        </div>

    </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>

                            <th>เพื่มรายการ เพจเฟสบุ๊ค</th>
                            <th>จัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fbpages as $fbpage)
                        <tr>

                            <td>{{$fbpage->link}}</td>
                            <td>
                                <div class="button-group">
                                    <a href="/admin/fb_page/{{$fbpage->id}}/edit" class="btn btn-warning btn-sm"><i
                                            class="fa fa-edit"></i></a>

                            {{-- <a href="javaScript: deleteItem('{{$fbpage->id  }}')" class="btn  btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </a> --}}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
                        axios.delete('/admin/fb_page/' + id).then(function (response) {
                            window.location.href = "/admin/fb_page/";
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
