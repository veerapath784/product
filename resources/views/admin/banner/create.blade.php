@extends('admin.layout.master')

@section('content')
<h1 class="h3 mb-4 text-gray-800">Banner</h1>
<div class="card">
    <div class="card-heading">
        <div class="container mt-3">
            <h4 class="card-title">เพื่มรายการ Banner</h4>
        </div>
        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="/admin/banner" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="inputFullname">ชื่อ Banner</label>
                    <input type="text" class="form-control" name="title"  required placeholder="">
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="th">
                        <div class="form-group">
                            <label><i class="fa fa-image"></i> รูป Banner</label>

                            <div class="form-group">
                                <input name=" url" type="file">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label>วัน - เวลาเริ่มต้น : <span class="text-danger">*</span></label>
                                <input class="form-control" readonly="1" id="start" name="start" type="text"
                                    value="2019-05-01 13:41:50">
                            </div>
                            <div class="form-group">
                                <label>วัน - เวลาสิ้นสุด <span class="text-danger">*</span></label>
                                <input class="form-control" readonly="1" id="end" name="end" type="text"
                                    value="2019-05-01 13:41:50">
                            </div>
                            <div class="form-group">
                                <label>ลิงค์ (ไปยังหน้าเว็บ) <span class="pull-right">&nbsp;</span></label>

                                <div class="input-group">
                                    <input class="form-control"
                                        placeholder="เช่น http://www.cmru.ac.th/category/1-ข่าวประชาสัมพันธ์.html"
                                        name="link" type="text">

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" id="btnsmt" type="submit">บันทึก</button>
                </div>


@section('script')
                <script>
                    $('#start').datetimepicker({
                format: 'Y-m-d H:i:s',
                lang: 'th',
                step: 30,
                onShow: function (ct) {
                    this.setOptions({
                        minDate: '{!! \Carbon\Carbon::now() !!}'
                        /* maxDate: $('#end_time').val() ? $('#end_time').val() : false*/
                    });
                },
                timepicker: true
            });

            $('#end').datetimepicker({
                format: 'Y-m-d H:i:s',
                lang: 'th',
                step: 30,
                onShow: function (ct) {
                    this.setOptions({
                        minDate: $('#start').val() ? $('#start').val() : false
                    });
                },
                timepicker: true
            });


                </script>
@endsection

@endsection
