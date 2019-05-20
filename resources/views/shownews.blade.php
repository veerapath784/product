@extends('admin.layout.master_homepage')
@section('content')
<br>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.3&appId=597010904140661&autoLogAppEvents=1">
</script>
<script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.3&appId=597010904140661&autoLogAppEvents=1">
</script>
<script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer">
</script>

<div class="container">
    <div class="row">
            <ol class="breadcrumb bg-white">
                    <li><a href="{!! url('/') !!}">หน้าแรก </a></li>
                    &nbsp;&nbsp;<i class="fa fa-angle-double-right mt-1" aria-hidden="true"></i>&nbsp;&nbsp;

                    <li>
                        <a href="/#Cnews">{!!
                            $article->category->name !!} </a></li>
                            &nbsp;&nbsp;<i class="fa fa-angle-double-right mt-1" aria-hidden="true"></i>&nbsp;&nbsp;
                    <li class="active">{!! $article->title !!}
                    </li>
                </ol>
        <div class="col-md-9">

            <h2 class="fontsupermarket">{{$article->title}}</h2>
            <div class="line-it-button" data-lang="th" data-type="like"
                data-url="http://localhost:8000/news/{!! $url !!}" style="display: none;"></div>
            <div class="fb-like" data-href="http://localhost:8000/news/{!! $url !!}" data-width=""
                data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true">
            </div>
            <br>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <hr>
            <p>{!!$article->detail!!}</p>

        </div>
        <div class="col-md-3">
            <iframe
                src="https://www.facebook.com/plugins/page.php?href={{$fbpage->link}}&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1730915820521210"
                width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                allowTransparency="true" allow="encrypted-media"></iframe>
        </div>
    </div>
    <div class="ml-5">
        <div class="fb-comments" data-href="http://localhost:8000/news/{!! $url !!}" data-width="" data-numposts="5">
        </div>
    </div>
</div>
</div>
