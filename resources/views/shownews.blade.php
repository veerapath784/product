@extends('admin.layout.master_homepage')
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h2 class="fontsupermarket">{{$article->title}}</h2>
            @foreach ($fbpage as $fbpage_row)
            <iframe src="https://www.facebook.com/plugins/like.php?href={{$fbpage_row->link}}&width=100&layout=button&action=like&size=small&show_faces=true&share=true&height=65&appId=1730915820521210" width="100" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            @endforeach


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
                @foreach ($fbpage as $fbpage_row)
                <iframe
            src="https://www.facebook.com/plugins/page.php?href={{$fbpage_row->link}}&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1730915820521210"
                    width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowTransparency="true" allow="encrypted-media"></iframe>
                    @endforeach
        </div>
    </div>
    <div class="ml-5">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.3&appId=1730915820521210&autoLogAppEvents=1">
    </script>

    <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator"
        data-width="" data-numposts="5"></div>
    </div>
    </div>
</div>
