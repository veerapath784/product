@extends('admin.layout.master_homepage')
@section('content')
<br>
<div class="container">
    @foreach ($latestArticle as $article)
    <div class="row">
            <h2 class="fontsupermarket">{{$article->title}}</h2>
    </div>
    @endforeach
</div>
