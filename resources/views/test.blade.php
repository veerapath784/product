<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Selling &mdash; Website by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="/shop/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/shop/css/bootstrap.min.css">
    <link rel="stylesheet" href="/shop/css/jquery-ui.css">
    <link rel="stylesheet" href="/shop/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/shop/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/shop/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="/shop/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="/shop/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="/shop/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="/shop/css/aos.css">

    <link rel="stylesheet" href="/shop/css/style.css">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <div class="top-bar py-3 bg-light" id="home-section">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 text-left">
            <ul class="social-media">
              <li><a href="#" class=""><span class="icon-facebook"></span></a></li>
              <li><a href="#" class=""><span class="icon-twitter"></span></a></li>
              <li><a href="#" class=""><span class="icon-instagram"></span></a></li>
              <li><a href="#" class=""><span class="icon-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-6">
            <p class="mb-0 float-right">
              <span class="mr-3"><a href="tel://#"> <span class="icon-phone mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">{{$contact->phone}}</span></a></span>
              <span><a href="#"><span class="icon-envelope mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">{{$contact->email}}</span></a></span>
            </p>

          </div>
        </div>
      </div>
    </div>

    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <h2 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0">{{$logos->logo}}<span class="text-primary">.</span> </a></h2>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#products-section" class="nav-link">Products</a></li>
                <li><a href="#about-section" class="nav-link">About Us</a></li>
                <li><a href="#special-section" class="nav-link">Special</a></li>
                <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                <li><a href="#blog-section" class="nav-link">Blog</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                <li><a href="/product" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>



    <div class="site-blocks-cover overlay" style="background-image: url('{{$banners->thumbnail}}');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">

            <div class="row mb-4">
              <div class="col-md-7">
                <h1>{{$banners->title}}</h1>
                {{-- <p class="mb-5 lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia.</p> --}}
                <div>
                  <a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block">Shop Now</a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section" id="products-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="section-sub-title">Popular Products</h3>
            <h2 class="section-title mb-3">Our Products</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                <img src="/shop/images/model_1_bg.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3><a href="#">Wild West Hoodie</a></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="#" class="mr-2"><span class="icon-star text-warning"></span></a> 5.0</span>
                  <span class="meta-icons wishlist"><a href="#" class="mr-2"><span class="icon-heart"></span></a> 29</span>
                </div>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <div>
                  <a href="#" class="btn btn-black mr-1 rounded-0">Cart</a>
                  <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                <img src="/shop/images/model_5_bg.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3><a href="#">Wild West Hoodie</a></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="#" class="mr-2"><span class="icon-star text-warning"></span></a> 5.0</span>
                  <span class="meta-icons wishlist"><a href="#" class="mr-2"><span class="icon-heart"></span></a> 29</span>
                </div>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <div>
                  <a href="#" class="btn btn-black mr-1 rounded-0">Cart</a>
                  <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="product-item">
              <figure>
                <img src="/shop/images/product_1_bg.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="px-4">
                <h3><a href="#">Wild West Hoodie</a></h3>
                <div class="mb-3">
                  <span class="meta-icons mr-3"><a href="#" class="mr-2"><span class="icon-star text-warning"></span></a> 5.0</span>
                  <span class="meta-icons wishlist"><a href="#" class="mr-2"><span class="icon-heart"></span></a> 29</span>
                </div>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <div>
                  <a href="#" class="btn btn-black mr-1 rounded-0">Cart</a>
                  <a href="#" class="btn btn-black btn-outline-black ml-1 rounded-0">View</a>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

    <div class="site-blocks-cover inner-page-cover overlay get-notification"  style="background-image: url('{{$banners->thumbnail}}'); background-attachment: fixed;" data-aos="fade">
      <div class="container">

        <div class="row align-items-center justify-content-center">
          <form class="col-md-7" method="post">
            <h1>Latest Articles</h1>
            {{-- <div class="d-flex mb-4">
              <input type="text" class="form-control rounded-0" placeholder="Enter your email address">
              <input type="submit" class="btn btn-white btn-outline-white rounded-0" value="Subscribe">
            </div> --}}
            {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat commodi veniam doloremque ducimus tempora.</p> --}}
          </form>
        </div>

      </div>
    </div>


    {{-- news --}}
    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5 justify-content-center">

        <div class="bg-white py-4 mb-4">
          <div class="row mx-4 my-4 product-item-2 align-items-start">
            <div class="col-md-6 mb-5 mb-md-0">
              <img src="/shop/images/model_1_bg.jpg" alt="Image" class="img-fluid">
            </div>

            <div class="col-md-5 ml-auto product-title-wrap">
                    @foreach ($latestArticle as $article)
              <span class="number">0{{$article->id}}.</span>
              <h3 class="text-black mb-4 font-weight-bold">{{$article->title}}</h3>
              <p class="mb-4">{{$article->description}}</p>

              {{-- <div class="mb-4">
                <h3 class="text-black font-weight-bold h5">Price:</h3>
                <div class="price"><del class="mr-2">$269.00</del> $69.00</div>
              </div> --}}
              <p>
                <a href="#" class="btn btn-black btn-outline-black rounded-0 d-block mb-2 mb-lg-0 d-lg-inline-block">View Details</a>
                {{-- <a href="#" class="btn btn-black rounded-0 d-block d-lg-inline-block">Add To Cart</a> --}}
              </p>
            </div>
            @endforeach
          </div>
        </div>



      </div>
    </div>


    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row align-items-lg-center">
          <div class="col-md-8 mb-5 mb-lg-0 position-relative">
            <img src="/shop/images/about_1.jpg" class="img-fluid" alt="Image">
            <div class="experience">
              <span class="year">Trusted Merchant</span>
              <span class="caption">for 50 years</span>
            </div>
          </div>
          <div class="col-md-3 ml-auto">
            <h3 class="section-sub-title">Merchant Company</h3>
            <h2 class="section-title mb-3">About Us</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui fuga ipsa, repellat blanditiis nihil, consectetur. Consequuntur eum inventore, rem maxime, nisi excepturi ipsam libero ratione adipisci alias eius vero vel!</p>
            <p><a href="#" class="btn btn-black btn-black--hover rounded-0">Learn More</a></p>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section border-bottom" id="team-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Team</h3>
            <h2 class="section-title mb-3">Leadership</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <div class="person text-center">
              <img src="/shop/images/person_2.jpg" alt="Image" class="img-fluid rounded w-75 mb-3">
              <h3>John Rooster</h3>
              <p class="position text-muted">Co-Founder, President</p>
              <p class="mb-4">Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <div class="person text-center">
              <img src="/shop/images/person_3.jpg" alt="Image" class="img-fluid rounded w-75 mb-3">
              <h3>Tom Sharp</h3>
              <p class="position text-muted">Co-Founder, COO</p>
              <p class="mb-4">Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
            <div class="person text-center">
              <img src="/shop/images/person_4.jpg" alt="Image" class="img-fluid rounded w-75 mb-3">
              <h3>Winston Hodson</h3>
              <p class="position text-muted">Marketing</p>
              <p class="mb-4">Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
              <ul class="ul-social-circle">
                <li><a href="#"><span class="icon-facebook"></span></a></li>
                <li><a href="#"><span class="icon-twitter"></span></a></li>
                <li><a href="#"><span class="icon-linkedin"></span></a></li>
                <li><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover overlay get-notification" id="special-section" style="background-image: url(/shop/images/hero_2.jpg); background-attachment: fixed; background-position: top;" data-aos="fade">
      <div class="container">

        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 text-center">
            <h3 class="section-sub-title">Special Promo</h3>
            <h3 class="section-title text-white mb-4">Summer Sale</h3>
            <p class="mb-5 lead">Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>

            <div id="date-countdown" class="mb-5"></div>

            <p><a href="#" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 mb-lg-0 mb-2 d-block d-sm-inline-block">Shop Now</a></p>
          </div>
        </div>

      </div>
    </div>

    <div class="site-section bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Our Services</h3>
            <h2 class="section-title mb-3">We Offer Services</h2>
          </div>
        </div>
        <div class="row align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-pie_chart"></span></div>
              <div>
                <h3>Business Consulting</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-backspace"></span></div>
              <div>
                <h3>Market Analysis</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-av_timer"></span></div>
              <div>
                <h3>User Monitoring</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-beenhere"></span></div>
              <div>
                <h3>Seller Consulting</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-business_center"></span></div>
              <div>
                <h3>Financial Investment</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
            <div class="unit-4 d-flex">
              <div class="unit-4-icon mr-4"><span class="text-primary icon-cloud_done"></span></div>
              <div>
                <h3>Financial Management</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                <p><a href="#">Learn More</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section testimonial-wrap" id="testimonials-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">People Says</h3>
            <h2 class="section-title mb-3">Testimonials</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              <figure class="mb-4 d-block align-items-center justify-content-center">
                <div><img src="/shop/images/person_3.jpg" alt="Image" class="w-100 img-fluid mb-3"></div>
              </figure>
              <blockquote class="mb-3">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <p class="text-black"><strong>John Smith</strong></p>


            </div>
          </div>
          <div>
            <div class="testimonial">

              <figure class="mb-4 d-block align-items-center justify-content-center">
                <div><img src="/shop/images/person_2.jpg" alt="Image" class="w-100 img-fluid mb-3"></div>
              </figure>

              <blockquote class="mb-3">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>

              <p class="text-black"><strong>Robert Aguilar</strong></p>


            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4 d-block align-items-center justify-content-center">
                <div><img src="/shop/images/person_4.jpg" alt="Image" class="w-100 img-fluid mb-3"></div>
              </figure>
              <blockquote class="mb-3">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <p class="text-black"><strong>Roger Spears</strong></p>


            </div>

          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4 d-block align-items-center justify-content-center">
                <div><img src="/shop/images/person_1.jpg" alt="Image" class="w-100 img-fluid mb-3"></div>
              </figure>
              <blockquote class="mb-3">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <p class="text-black"><strong>Kyle McDonald</strong></p>


            </div>

          </div>

        </div>
    </div>



    <div class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Blog</h3>
            <h2 class="section-title mb-3">Blog Posts</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="/shop/images/model_1_bg.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#" class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">Ham Brook <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="/shop/images/product_1_bg.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#" class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="/shop/images/model_5_bg.jpg" alt="Image" class="img-fluid">
              <h2 class="font-size-regular"><a href="#" class="text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
              <p><a href="#">Continue Reading...</a></p>
            </div>
          </div>

        </div>
      </div>
    </div>




    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Contact Form</h3>
            <h2 class="section-title mb-3">Get In Touch</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5">



            <form action="#" class="p-5 bg-white">

              <h2 class="h4 text-black mb-5">Contact Form</h2>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control rounded-0">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label>
                  <input type="email" id="email" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label>
                  <input type="subject" id="subject" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label>
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-black rounded-0 py-3 px-4">
                </div>
              </div>


            </form>
          </div>

        </div>

      </div>
    </div>


    <footer class="site-footer bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-3 ">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3 ml-auto">
            <h2 class="footer-heading mb-4">Featured Product</h2>
            <a href="#"><img src="/shop/images/product_1_bg.jpg" alt="Image" class="img-fluid mb-3"></a>
            <h4 class="h5">Leather Brown Shoe</h4>
            <strong class="text-black mb-3 d-inline-block">$60.00</strong>
            <p><a href="#" class="btn btn-black rounded-0">Add to Cart</a></p>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="/shop/js/jquery-3.3.1.min.js"></script>
  <script src="/shop/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/shop/js/jquery-ui.js"></script>
  <script src="/shop/js/popper.min.js"></script>
  <script src="/shop/js/bootstrap.min.js"></script>
  <script src="/shop/js/owl.carousel.min.js"></script>
  <script src="/shop/js/jquery.stellar.min.js"></script>
  <script src="/shop/js/jquery.countdown.min.js"></script>
  <script src="/shop/js/bootstrap-datepicker.min.js"></script>
  <script src="/shop/js/jquery.easing.1.3.js"></script>
  <script src="/shop/js/aos.js"></script>
  <script src="/shop/js/jquery.fancybox.min.js"></script>
  <script src="/shop/js/jquery.sticky.js"></script>


  <script src="/shop/js/main.js"></script>

  </body>
</html>
