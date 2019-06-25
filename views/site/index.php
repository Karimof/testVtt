<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<!-- Start Home Page Slider -->
<section id="page-top">
    <!-- Carousel -->
    <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
            <div class="item active">
                <img class="img-responsive" src="/web/site/images/header-bg-1.jpg" alt="slider">
                <div class="slider-content">
                    <div class="col-md-12 text-center">
                        <h1 class="animated3">
                            <span><strong>Fame</strong> for the highest</span>
                        </h1>
                        <p class="animated2">At vero eos et accusamus et iusto odio dignissimos<br> ducimus qui blanditiis praesentium voluptatum</p>
                        <a href="#feature" class="page-scroll btn btn-primary animated1">Read More</a>
                    </div>
                </div>
            </div>
            <!--/ Carousel item end -->

            <div class="item">
                <img class="img-responsive" src="/web/site/images/header-back.png" alt="slider">

                <div class="slider-content">
                    <div class="col-md-12 text-center">
                        <h1 class="animated1">
                            <span>Welcome to <strong>Fame</strong></span>
                        </h1>
                        <p class="animated2">Generate a flood of new business with the<br> power of a digital media platform</p>
                        <a href="#feature" class="page-scroll btn btn-primary animated3">Read More</a>
                    </div>
                </div>
            </div>
            <!--/ Carousel item end -->

            <div class="item">
                <img class="img-responsive" src="/web/site/images/galaxy.jpg" alt="slider">
                <div class="slider-content">
                    <div class="col-md-12 text-center">
                        <h1 class="animated2">
                            <span>The way of <strong>Success</strong></span>
                        </h1>
                        <p class="animated1">At vero eos et accusamus et iusto odio dignissimos<br> ducimus qui blanditiis praesentium voluptatum</p>
                        <a class="animated3 slider btn btn-primary btn-min-block" href="#">Get Now</a><a class="animated3 slider btn btn-default btn-min-block" href="#">Live Demo</a>

                    </div>
                </div>
            </div>
            <!--/ Carousel item end -->
        </div>
        <!-- Carousel inner end-->

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
    </div>
    <!-- /carousel -->
</section>
<!-- End Home Page Slider -->
