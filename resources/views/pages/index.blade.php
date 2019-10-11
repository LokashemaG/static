@extends('layouts.web')

@section('content')
 <!--start home area-->
 <section class="home-area">
    <div class="container">
        <div class="row">
            <!--start caption content-->
            <div class="col-md-6">
                <div class="caption-cont">
                    <h1>Best And Powerful Hosting Service Provider</h1>
                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                    <a class="bg" href="#">Get Started</a><a href="#">Pricing Plans</a>
                </div>
            </div>
            <!--end caption content-->
            <!--start caption image-->
            <div class="col-md-6">
                <div class="caption-img">
                    <img src="assets/images/server-1.png" class="img-fluid" alt="">
                </div>
            </div>
            <!--end caption image-->
        </div>
    </div>
</section>
<!--end home area-->
<!--start domain search area-->
<section class="domain-search bg-gray">
    <div class="container">
        <div class="row">
            <!--start section heading-->
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading mb-4 text-center">
                    <h2>Search Your Domain</h2>
                </div>
            </div>
            <!--end section heading-->
        </div>
        <div class="row">
            <!--start domain search box-->
            <div class="col-lg-8 offset-lg-2">
                <div class="domain-box">
                    <form action="#" method="post">
                        <div class="domain-form-inner">
                            <input type="text" class="form-control" placeholder="Enter domain name here">
                            <div class="domain-select">
                                <span><i class="icofont-simple-down"></i></span>
                                <select class="form-control">
                                    <option>.com</option>
                                    <option>.net</option>
                                    <option>.org</option>
                                    <option>.biz</option>
                                    <option>.uk</option>
                                </select>
                            </div>
                            <button type="submit">Search</button>
                        </div>
                    </form>
                </div>
                <!--start domain price-->
                <div class="domain-price">
                    <ul>
                        <li>.com <span>$6.50</span> <del>$9</del></li>
                        <li><small>|</small></li>
                        <li>.net <span>$10</span> <del>$12</del></li>
                        <li><small>|</small></li>
                        <li>.org <span>$11</span> <del>$15</del></li>
                        <li><small>|</small></li>
                        <li>.us <span>$9.50</span> <del>$12.50</del></li>
                        <li><small>|</small></li>
                        <li>.me <span>$7.50</span> <del>$9</del></li>
                    </ul>
                </div>
                <!--end domain price-->
            </div>
            <!--end domain search box-->
        </div>
    </div>
</section>
<!--end domain search area-->
<!--start service area-->
<section class="service-area">
    <div class="container">
        <div class="row">
            <!--start section heading-->
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                <div class="section-heading text-center">
                    <h2>Our Services</h2>
                    <p>Lorem ipsum dolor sittem ametamngcing elit, per sed do eiusmoad teimpor sittem elit inuning ut sed.</p>
                </div>
            </div>
            <!--end section heading-->
        </div>
        <div class="row">
            <!--start service single-->
            <div class="col-lg-4 col-md-6">
                <div class="service-single">
                    <div class="icon">
                        <img src="assets/images/icon-1.png" class="img-fluid" alt="">
                    </div>
                    <h4>Shared Hosting</h4>
                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                </div>
            </div>
            <!--end service single-->
            <!--start service single-->
            <div class="col-lg-4 col-md-6">
                <div class="service-single">
                    <div class="icon">
                        <img src="assets/images/icon-2.png" class="img-fluid" alt="">
                    </div>
                    <h4>Dedicated Hosting</h4>
                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                </div>
            </div>
            <!--end service single-->
            <!--start service single-->
            <div class="col-lg-4 col-md-6">
                <div class="service-single">
                    <div class="icon">
                        <img src="assets/images/icon-3.png" class="img-fluid" alt="">
                    </div>
                    <h4>Cloud Hosting</h4>
                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                </div>
            </div>
            <!--end service single-->
            <!--start service single-->
            <div class="col-lg-4 col-md-6">
                <div class="service-single">
                    <div class="icon">
                        <img src="assets/images/icon-4.png" class="img-fluid" alt="">
                    </div>
                    <h4>VPS Hosting</h4>
                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                </div>
            </div>
            <!--end service single-->
            <!--start service single-->
            <div class="col-lg-4 col-md-6">
                <div class="service-single">
                    <div class="icon">
                        <img src="assets/images/icon-5.png" class="img-fluid" alt="">
                    </div>
                    <h4>Reseller Hosting</h4>
                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                </div>
            </div>
            <!--end service single-->
            <!--start service single-->
            <div class="col-lg-4 col-md-6">
                <div class="service-single">
                    <div class="icon">
                        <img src="assets/images/icon-6.png" class="img-fluid" alt="">
                    </div>
                    <h4>Domain Registration</h4>
                    <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                </div>
            </div>
            <!--end service single-->
        </div>
    </div>
</section>
<!--end service area-->
<!--start pricing area-->
<section class="pricing-area bg-gray">
    <div class="container">
        <div class="row">
            <!--start section heading-->
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                <div class="section-heading text-center">
                    <h2>Our Pricing Plan</h2>
                    <p>Lorem ipsum dolor sittem ametamngcing elit, per sed do eiusmoad teimpor sittem elit inuning ut sed.</p>
                </div>
            </div>
            <!--end section heading-->
        </div>
        <div class="row">
            <!--start pricing table single-->
            <div class="col-md-4">
                <div class="pricing-tbl-single">
                    <h4>Shared Hosting</h4>
                    <div class="price">
                        <h2>$19<sub> /month</sub></h2>
                    </div>
                    <div class="price-details">
                        <ul>
                            <li><i class="icon-harddisk"></i> Space <span>5 GB SSD</span></li>
                            <li><i class="icon-database1"></i> Bandwidth <span>15 GB SSD</span></li>
                            <li><i class="icon-server12"></i> Domain <span>5 Domain</span></li>
                            <li><i class="icon-calculation"></i> Database <span>10 Database</span></li>
                            <li><i class="icon-servers"></i> CPU <span>4 Cores</span></li>
                        </ul>
                        <h6>24/7 Dedicated Support</h6>
                    </div>
                    <button>Order Now</button>
                </div>
            </div>
            <!--end pricing table single-->
            <!--start pricing table single-->
            <div class="col-md-4">
                <div class="pricing-tbl-single rcom">
                    <h4>Cloud Hosting</h4>
                    <div class="price">
                        <h2>$29<sub> /month</sub></h2>
                    </div>
                    <div class="price-details">
                        <ul>
                            <li><i class="icon-harddisk"></i> Space <span>10 GB SSD</span></li>
                            <li><i class="icon-database1"></i> Bandwidth <span>20 GB SSD</span></li>
                            <li><i class="icon-server12"></i> Domain <span>20 Domain</span></li>
                            <li><i class="icon-calculation"></i> Database <span>50 Database</span></li>
                            <li><i class="icon-servers"></i> CPU <span>6 Cores</span></li>
                        </ul>
                        <h6>24/7 Dedicated Support</h6>
                    </div>
                    <button>Order Now</button>
                </div>
            </div>
            <!--end pricing table single-->
            <!--start pricing table single-->
            <div class="col-md-4">
                <div class="pricing-tbl-single">
                    <h4>Dedicated Hosting</h4>
                    <div class="price">
                        <h2>$39<sub> /month</sub></h2>
                    </div>
                    <div class="price-details">
                        <ul>
                            <li><i class="icon-harddisk"></i> Space <span>40 GB SSD</span></li>
                            <li><i class="icon-database1"></i> Bandwidth <span>50 GB SSD</span></li>
                            <li><i class="icon-server12"></i> Domain <span>30 Domain</span></li>
                            <li><i class="icon-calculation"></i> Database <span>50 Database</span></li>
                            <li><i class="icon-servers"></i> CPU <span>10 Cores</span></li>
                        </ul>
                        <h6>24/7 Dedicated Support</h6>
                    </div>
                    <button>Order Now</button>
                </div>
            </div>
            <!--end pricing table single-->
        </div>
    </div>
</section>
<!--end pricing area-->
<!--start special offer area-->
<section class="specl-offer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="specl-offer-cont">
                    <h2>Special Offer For Limited Time. 30% Discount On All Hosting Plans</h2>
                    <h4>Starting from $19.99 /month</h4>
                    <p class="text-light mt-4">Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor.</p>
                    <a href="#">Order Now</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="specl-offer-img text-right">
                    <img src="assets/images/server-2.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--end special offer area-->
<!--start feature area-->
<section class="feature-area">
    <div class="container">
        <!--start feature wrap-->
        <div class="feat-wrap">
            <div class="row">
                <!--start feature image-->
                <div class="col-md-6">
                    <div class="feat-img mr-5 text-center">
                        <img src="assets/images/server-1.png" class="img-fluid" alt="">
                    </div>
                </div>
                <!--end feature image-->
                <!--start feature content-->
                <div class="col-md-6">
                    <div class="feat-cont-single">
                        <div class="icon">
                            <i class="icon-speed"></i>
                        </div>
                        <h3>99.9% Uptime Guarantee</h3>
                        <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat metus.</p>
                    </div>
                    <div class="feat-cont-single">
                        <div class="icon">
                            <i class="icon-internet"></i>
                        </div>
                        <h3>Global Datacenters</h3>
                        <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat metus.</p>
                    </div>
                </div>
                <!--end feature content-->
            </div>
        </div>
        <!--end feature wrap-->
        <!--start feature wrap-->
        <div class="feat-wrap">
            <div class="row">
                <!--start feature content-->
                <div class="col-md-6">
                    <div class="feat-cont-single">
                        <div class="icon">
                            <i class="icon-calculation"></i>
                        </div>
                        <h3>Web Asset Delivery </h3>
                        <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat metus.</p>
                    </div>
                    <div class="feat-cont-single">
                        <div class="icon">
                            <i class="icon-24-hours"></i>
                        </div>
                        <h3>24/7 Dedicated Support</h3>
                        <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat metus.</p>
                    </div>
                </div>
                <!--end feature content-->
                <!--start feature image-->
                <div class="col-md-6 text-center">
                    <div class="feat-img">
                        <img src="assets/images/server-2.png" class="img-fluid" alt="">
                    </div>
                </div>
                <!--end feature image-->
            </div>
        </div>
        <!--end feature wrap-->
    </div>
</section>
<!--end feature area-->
<!--start testimonial area-->
<section class="testi-area bg-gray">
    <div class="container">
        <div class="row">
            <!--start section heading-->
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                <div class="section-heading text-center">
                    <h2>Our Testimonial</h2>
                    <p>Lorem ipsum dolor sittem ametamngcing elit, per sed do eiusmoad teimpor sittem elit inuning ut sed.</p>
                </div>
            </div>
            <!--end section heading-->
        </div>
    </div>
    <!--start testimonial carousel-->
    <div class="testi-carousel owl-carousel">
        <!--start testimonial single-->
        <div class="testi-single">
            <div class="client-comment">
                <span><i class="icofont-quote-left"></i></span>
                <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></p>
            </div>
            <div class="client-info">
                <div class="client-img">
                    <img src="assets/images/team-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="client-details">
                    <h4>Adam Smith</h4>
                    <p>Web Developer</p>
                </div>
            </div>
        </div>
        <!--end testimonial single-->
        <!--start testimonial single-->
        <div class="testi-single">
            <div class="client-comment">
                <span><i class="icofont-quote-left"></i></span>
                <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></p>
            </div>
            <div class="client-info">
                <div class="client-img">
                    <img src="assets/images/team-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="client-details">
                    <h4>Shane Warne</h4>
                    <p>Graphic Designer</p>
                </div>
            </div>
        </div>
        <!--end testimonial single-->
        <!--start testimonial single-->
        <div class="testi-single">
            <div class="client-comment">
                <span><i class="icofont-quote-left"></i></span>
                <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></p>
            </div>
            <div class="client-info">
                <div class="client-img">
                    <img src="assets/images/team-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="client-details">
                    <h4>Marteen Kooper</h4>
                    <p>Web Developer</p>
                </div>
            </div>
        </div>
        <!--end testimonial single-->
        <!--start testimonial single-->
        <div class="testi-single">
            <div class="client-comment">
                <span><i class="icofont-quote-left"></i></span>
                <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></p>
            </div>
            <div class="client-info">
                <div class="client-img">
                    <img src="assets/images/team-4.jpg" class="img-fluid" alt="">
                </div>
                <div class="client-details">
                    <h4>Jhon Smith</h4>
                    <p>App Developer</p>
                </div>
            </div>
        </div>
        <!--end testimonial single-->
        <!--start testimonial single-->
        <div class="testi-single">
            <div class="client-comment">
                <span><i class="icofont-quote-left"></i></span>
                <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
                <p><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i><i class="icofont-star"></i></p>
            </div>
            <div class="client-info">
                <div class="client-img">
                    <img src="assets/images/team-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="client-details">
                    <h4>Shane Warne</h4>
                    <p>Graphic Designer</p>
                </div>
            </div>
        </div>
        <!--end testimonial single-->
    </div>
    <!--end testimonial carousel-->
</section>
<!--end testimonial area-->
<!--start blog area-->
<section class="blog-area">
    <div class="container">
        <div class="row">
            <!--start section heading-->
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                <div class="section-heading text-center">
                    <h2>Our Latest Blog</h2>
                    <p>Lorem ipsum dolor sittem ametamngcing elit, per sed do eiusmoad teimpor sittem elit inuning ut sed.</p>
                </div>
            </div>
            <!--end section heading-->
        </div>
        <div class="row">
            <!--start blog single-->
            <div class="col-md-4">
                <div class="blog-single">
                    <div class="post-media">
                        <a href="#"><img src="assets/images/blog-1.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="post-cont text-center">
                        <h6><a href="#"><i class="icofont-user"></i> Admin</a><small>|</small><a href="#"><i class="icofont-ui-calendar"></i> 25 Mar, 2019</a></h6>
                        <h3><a href="#">How to setup dedicated hosting</a></h3>
                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                    </div>
                </div>
            </div>
            <!--end blog single-->
            <!--start blog single-->
            <div class="col-md-4">
                <div class="blog-single">
                    <div class="post-media">
                        <a href="#"><img src="assets/images/blog-2.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="post-cont text-center">
                        <h6><a href="#"><i class="icofont-user"></i> Admin</a><small>|</small><a href="#"><i class="icofont-ui-calendar"></i> 26 Mar, 2019</a></h6>
                        <h3><a href="#">How to configure cloud hosting plan</a></h3>
                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                    </div>
                </div>
            </div>
            <!--end blog single-->
            <!--start blog single-->
            <div class="col-md-4">
                <div class="blog-single">
                    <div class="post-media">
                        <a href="#"><img src="assets/images/blog-3.jpg" class="img-fluid" alt=""></a>
                    </div>
                    <div class="post-cont text-center">
                        <h6><a href="#"><i class="icofont-user"></i> Admin</a><small>|</small><a href="#"><i class="icofont-ui-calendar"></i> 28 Mar, 2019</a></h6>
                        <h3><a href="#">How to setup vps hosting account</a></h3>
                        <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>
                    </div>
                </div>
            </div>
            <!--end blog single-->
        </div>
    </div>
</section>
<!--end blog area-->

    
@endsection