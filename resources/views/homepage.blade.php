@extends('admin.layout.master_homepage')
@section('content')

<header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">

                    @php($i = 0)
                    @foreach($banners as $banner)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" @if($i == 0) class="active" @endif></li>
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
        <div class="row mt-5">
                <div class="col-lg-7">


                  <h4>{{$article->title}}</h4>
                  {!!$article->description!!}
                </div>
                <div class="col-lg-5">
                  <img class="img-fluid rounded" src="{{$article->thumbnail}}" alt="">
                </div>
              </div>

               @endforeach


              <!-- /.row -->

              <hr>
        <h3 class="fontPrompt" style="border-left:10px solid #FDE313;">
                <span style="margin-left:15px;">..</span></h3>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Card Title</h4>
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->
    {{-- <h2>Portfolio Heading</h2>
@foreach ($categories as $category)
<h6>{{$category->name}}</h6>
    <div class="row">
        @foreach ($category->articles as $article)
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
        <a href="#"><img class="card-img-top" src="{{$article->thumbnail}}" alt="{{$article->name}}"></a>
          <div class="card-body">
            <h5 class="card-title text-dark">
              <a class="text-info " href="https://mgronline.com/cyberbiz/detail/9610000127841">{{$article->title}}</a>
            </h5>
            <p class="text-muted"> อ่านต่อ..<p>
          </div>
        </div>
      </div>
      @endforeach


@endforeach
    </div> --}}
    <!-- /.row -->

    <!-- Features Section -->

    <hr>
    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
      </div>
    </div>

  </div>

    @endsection
