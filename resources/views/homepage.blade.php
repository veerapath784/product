@extends('admin.layout.master_homepage')
<link rel="stylesheet" href="/css/style-homepage.css">
@section('content')


    @include('admin.layout.logo')
    @include('admin.layout.navbar')


<div class="container bm-2 logo"
    >
    <div id="carouselExampleIndicators" class="carousel slide mt-3 " data-ride="carousel" >
        <ol class="carousel-indicators">
            @php($i = 0)
            @foreach($banners as $banner)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" @if($i==0) class="active" @endif></li>
            @php($i++)
            @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
            @php($j = 0)
            @foreach($banners as $banner)

            <div class="carousel-item @if($j == 0) active @endif"
                style="background-image: url('{{$banner->thumbnail}}') ; background-repeat: no-repeat;
                background-size: 100% 100%; max-width: 100%;  border-radius: 3px;">
                <span class="badge badge-pill badge-danger">New</span>
                <div class="carousel-caption d-none d-md-block">
                    <h4>
                        <a href="{{$banner->link}}" style="color:ivory"></a></h4>
                </div>
            </div>
            @php($j++)
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
</div>
<br>

<div class="col-md-9">
    <div id="news"></div>
</div>
<!-- Page New Articles -->
<div class="latestArticle container mb-2"
    >
    <div class="row">
        <h3 class="fontPrompt mb-3" >
            <span style="margin-left:15px; "><i class="fas fa-newspaper"></i> ข่าวใหม่ล่าสุด </span></h3>
            <div class="container">
                  <hr width="95%" size="20" color="#1565C0" align="center">
            </div>

        @foreach ($latestArticle as $article)
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid rounded w-100" src="{{$article->thumbnail}}" alt=""
                        style="max-height:150px;">

                </div>

                <div class="col-md-6">
                    <a style="color: #1565C0;" href="/news/{!! $article->id !!}">
                        <h5>{{$article->title}}</h5></a>
                        <p style="color: #212F3C;">{!!$article->description!!}</p>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<br>




<div class="container latestArticle"
    >
    <div class="row">
        <h3 class="fontPrompt mb-3" style=" ">
            <span style="margin-left:15px; "><i class="fas fa-layer-group"></i> หมวดหมู่ข่าว </span></h3>
            <div class="container">
                    <hr width="95%" size="20" color="#1565C0" align="center">
              </div>
        <div class="col-lg-9">
            <div class="row">
                <div class="col-md-10">
                    <div id="Cnews"></div>
                    <ul class="nav nav-tabs">
                        @php($i = 0)
                        @foreach ($categories as $category)
                        <li class="nav-item ">
                            <a class="nav-link text-primary @if($i == 0) active @endif" data-toggle="tab"
                                href="#menu{{$i}}">{!!$category->name!!}</a>
                        </li>
                        @php($i++)
                        @endforeach
                    </ul>
                    <!-- Tab panes -->

                    <div class="tab-content">
                        @php($i = 0)
                        @foreach ($categories as $category)
                        <div class="text-warning tab-pane container @if($i == 0) active @endif mt-2" id="menu{{$i}}">
                            <ul>
                                @foreach($category->articles as $article)
                                <li><a href="/news/{!! $article->id !!}" class="text-dark">
                                        <p>{{$article->title}}</p>

                                    </a> </li>
                                @endforeach
                            </ul>
                        </div>
                        @php($i++)
                        @endforeach
                    </div>

                </div>

                <div class="col-md-2">
                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href={{$fbpage->link}}&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1730915820521210"
                        width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowTransparency="true" allow="encrypted-media"></iframe>

                </div>

            </div>
        </div>
    </div>
    <br>
</div>

<br>
</div>
</div>
@endsection
