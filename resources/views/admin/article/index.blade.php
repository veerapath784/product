@extends('admin.layout.master')

@section('content')
<h1 class="h3 mb-4 text-gray-800">ข่าวสาร
</h1>
<div class="card shadow ">
    <div class="card-heading">
        <div class="container mt-3">
            <h4 class="card-title">รายการ ข่าวสาร</h4>
            <span class="float-right"><a href="/admin/article/create" class="btn btn-sm btn-success"><i
                        class="fa fa-plus"></i>
                    เพิ่มข่าวสาร</a></span>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered ">
                <tr  class="text-center">
                    <th>#</th>
                    <th>หมวดหมู่</th>
                    <th>หัวข้อข่าว</th>
                    {{-- <th>รายละเอียดข่าว</th> --}}
                    <th width="100">จัดการ</th>
                </tr>

                <tbody>
                    @foreach($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->category['name']}}</td>
                        {{-- <td>{!!$article->detail!!}</td> --}}
                        <td >
                            <div class="button-group">
                                <a href="/admin/article/{{$article->id}}/edit" class="btn btn-warning btn-sm"><i
                                        class="fa fa-edit"></i></a>

                                <a href="javaScript: deleteItem('{{$article->id}}')" class="btn  btn-danger btn-sm">
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
                        axios.delete('/admin/article/' + id).then(function (response) {
                            window.location.href = "/admin/article/";
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
</div>
</div>
    @endsection


@endsection

