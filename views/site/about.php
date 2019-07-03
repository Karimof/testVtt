<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <!-- Start About Us Section -->
    <section id="about-us" class="about-us-section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                        <h3>About Us</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <div class="welcome-section text-center">
                        <img src="images/about-01.jpg" class="img-responsive" alt="..">
                        <h4>Office Philosophy</h4>
                        <div class="border"></div>
                        <p>Duis aute irure dolor in reprehen derit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Lorem reprehenderit</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="welcome-section text-center">
                        <img src="images/about-02.jpg" class="img-responsive" alt="..">
                        <h4>Office Mission & Vission</h4>
                        <div class="border"></div>
                        <p>Duis aute irure dolor in reprehen derit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Lorem reprehenderit</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="welcome-section text-center">
                        <img src="images/about-03.jpg" class="img-responsive" alt="..">
                        <h4>Office Value & Rules</h4>
                        <div class="border"></div>
                        <p>Duis aute irure dolor in reprehen derit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Lorem reprehenderit</p>
                    </div>
                </div>

            </div><!-- /.row -->

        </div><!-- /.container -->
    </section>
    <!-- End About Us Section -->

    <!-- Start Fun Facts Section -->
    <section class="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="counter-item">
                        <i class="fa fa-cloud-upload"></i>
                        <div class="timer" id="item1" data-to="100" data-speed="5000"></div>
                        <h5>Files uploaded</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="counter-item">
                        <i class="fa fa-check"></i>
                        <div class="timer" id="item2" data-to="200" data-speed="5000"></div>
                        <h5>Projects completed</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="counter-item">
                        <i class="fa fa-code"></i>
                        <div class="timer" id="item3" data-to="300" data-speed="5000"></div>
                        <h5>Lines of code written</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="counter-item">
                        <i class="fa fa-male"></i>
                        <div class="timer" id="item4" data-to="400" data-speed="5000"></div>
                        <h5>Happy clients</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fun Facts Section -->

</div>
