@extends('admin.layout.master_homepage')
@section('content')

<header>
    <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">

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
                style="background-image: url('{{$banner->thumbnail}}') ">
                <span class="badge badge-pill badge-danger">New</span>
                <div class="carousel-caption d-none d-md-block">
                    <h4>
                    <a href="{{$banner->link}}" style="color:ivory">{{$banner->title}}</a></h4>
                </div>
            </div>
            @php($j++)
            @endforeach
        </div>
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

</header>
<div class="col-md-9">
    <div id="news"></div>
</div>
<!-- Page New Articles -->
<div class="container mt-5">
    <h2 class="fontPrompt mb-3" style="border-left:10px solid #FDE313;">
        <span style="margin-left:15px;">ข่าวใหม่ล่าสุด </span></h2>
        <hr width="100%  size="20" color="#FDE313" align="left">

    <div class="row">
        @foreach ($latestArticle as $article)
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid rounded w-100" src="{{$article->thumbnail}}" alt=""
                        style="max-height:150px; ">

                </div>

                <div class="col-md-6">
                    <a href="/news/{!! $article->id !!}" class="text-info">
                        <h5>{{$article->title}}</h5>
                        <p>{!!$article->description!!}</p>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>



</div>


<div class="container">

        <h2 class="fontPrompt mb-3" style="border-left:10px solid #FDE313;">
                <span style="margin-left:15px;">หมวดหมู่ข่าว </span></h2>
                <hr width="100%  size="20" color="#FDE313" align="left">
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
                    <div class="text-warning tab-pane container @if($i == 0) active @endif" id="menu{{$i}}">
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
</div>
@endsection
