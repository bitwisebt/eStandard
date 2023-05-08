@extends('layouts.web_app')
@section('content')

<main id="main">

  <!-- ======= Header ======= -->
  <div class="header-bg page-area">
    <div class="container position-relative">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2">
                <h1>STANDARD</h1>
              </div>
              <div class="layer3">
                <h2>TC 01</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Header -->

  <!-- ======= TC Page ======= -->
  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <div class="page-head-blog">
            <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog" style="background-color: #f1f1f1; padding:10px; border-radius:10px">
                <h4>Other Standards</h4>
                <div class="recent-post">
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="pst-content">
                      <p><a href="#"> Redug Lerse dolor sit amet consect adipis elit.</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                </div>
              </div>
              <!-- recent end -->
            </div>
          </div>
        </div>
        <!-- End left sidebar -->
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="blog-text">
                  <h3 class="text-muted">Description List</h3>

                  <dl class="row">
                    <dt class="col-sm-3">Romeo and Juliet</dt>
                    <dd class="col-sm-9">In Romeo and Juliet, Shakespeare creates a world of violence and generational conflict in which two young people fall in love and die because of that love.</dd>

                    <dt class="col-sm-3">Charlotte's Web </dt>
                    <dd class="col-sm-9">
                      <p>This beloved book by E. B. White, author of Stuart Little and The Trumpet of the Swan, is a classic of children's literature that is "just about perfect."</p>
                      <p>Charlotte's spiderweb tells of her feelings for a little pig named Wilbur, who simply wants a friend. They also express the love of a girl named Fern, who saved Wilbur's life when he was born the runt of his litter.</p>
                    </dd>

                    <dt class="col-sm-3 text-truncate">Alice's Adventures in Wonderland & Through the Looking-Glass </dt>
                    <dd class="col-sm-9">When Alice sees a white rabbit take a watch out of its waistcoat pocket she decides to follow it, and a sequence of most unusual events is set in motion.</dd>
                  </dl>

                </div>
              </div>
            </div>
            <!-- End single blog -->
          </div>
        </div>
      </div>
    </div>
  </div><!-- End TC Page -->

</main><!-- End #main -->
@endsection