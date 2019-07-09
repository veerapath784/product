@extends('admin.layout.master_homepage')
<link rel="stylesheet" href="/css/style-homepage.css">
@section('content')
<div class="container logo">

    <div class="text-center mt-3">
        <h1>ติดต่อเรา</h1>
        <h2 class="fontPrompt mb-3" style="border-bottom:10px solid #FDE313;">
        </h2>
    </div>
    <div class="container text-center">
        <div class="w-100 p-3 text-center" style="background-color:#FFFFF0;">
            <div class="containaer text-center">
                {!!$contact->link!!}
            </div>
            <h2>{{$contact->title}}</h2>
            <div class="box first">
                <i class="fa fa-map-marker text-blue"></i>
                <p>{{$contact->address}}</p>
            </div>
            <div class="box">
                <i class="fa fa-phone"></i>
                <div class="half">{{$contact->phone}}</div>
                <div class="half">ทุกวัน จันทร์ - ศุกร์</div>
            </div>
            <div class="box">
                <i class="fa fa-fax"></i>
                <div class="half">{{$contact->email}}</div>

            </div>
        </div>
    </div>
    <br>
</div>
<br>

@endsection
