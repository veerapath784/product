@extends('admin.layout.master_homepage')
@section('content')
<br>
<div class="container">

    <div class="row">
    <h2 class="fontsupermarket">{{$article->title}}</h2>
    <div class="row">
    <p>{!!$article->detail!!}</p>
    </div>
    </div>

</div>
