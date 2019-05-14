@extends('admin.layout.master_homepage')
@section('content')

<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

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

      <div class="carousel-item @if($j == 0) active @endif" style="background-image: url('{{$banner->thumbnail}}')">
        <span class="badge badge-pill badge-danger">New</span>
        <div class="carousel-caption d-none d-md-block">
          <h3>{{$banner->title}}</h3>
          <a href="{{$banner->link}}" class="btn btn-outline-primary">คลิกเลยยย !!</a>
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

</header>

<!-- Page Content -->
<div class="container mt-5">
  <h3 class="fontPrompt" style="border-left:10px solid #FDE313;">
    <span style="margin-left:15px;">ข่าวใหม่</span></h3>
  @foreach ($latestArticle as $article)
  <div class="row">
    <div class="col-lg-6">
      <div class="row mt-5">
        <div class="col-lg-7">
          <h5>{{$article->title}}</h5>
          {{-- {!!$article->description!!} --}}
        </div>
        <div class="col-lg-5">
          <img class="img-fluid rounded" src="{{$article->thumbnail}}" alt="">
        </div>
      </div>
    </div>
    @endforeach

  </div>
</div>
<br>
<!-- /.row -->

<hr>
</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-7">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
    </div>
  </div>

</div>





<br>
</div>

@endsection
