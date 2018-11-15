@extends('fontEnd.layouts.master')

@section('content')

 <section id="slider">
        <div class=" main-slider owl-carousel">
        @foreach($sliders as $slider)
            <div class="slider-item">
                <div class="slider-image">
                    <img src="{{ asset('public/storage') }}/{{ $slider->image }}">
                </div>
                <div class="slider-text hidden-xs">
                    <h2 class="allcaps animated bounceInLeft">{{$slider->slider_title}}</h2>
                    <div class="divider"></div>
                    <p class="animated fadeInUp">{{$slider->slider_subtitle}}.</p>
                    <div class="midd-button">
                        <a href="#" class="about-company-btn animated fadeInUp">{{$slider->slider_name}}</a>
                    </div>
                </div>
                <div class="slider-overlay"></div>
            </div>
        @endforeach
            <!--slider-item end-->
        </div>
        <!-- End Carousel -->
</section> <!--Slider end-->
   
    <section class="about-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div id="about" class="about-box1">
                        <h2> Wecome to Riant Engineering Ltd</h2>
                        <p> OVERVIEW Riant Engineers Ltd (REL) is an engineering based EPC (Engineering Procurement and construction) firm, previously known as Riant Engineers which was formed in early 2006 by some of expert professional engineers to provide complete engineering solution to the infrastructure and power sector in our country. Since its inception, we have successfully completed many iconic projects in Civil and Construction, Power and Energy, Mechanical, Automation & Real Estate Sector and has made good name in this arena by ensuring highest Our Servicestandard in every process of our work and completing projects in due time. Soon, our company came to light and earned reliability to the industrial entrepreneur like-Private (Multinational and Local) and government organization for our technical knowhow and ready solution to the critical problems. Our objective is to produce quality Engineering services through positive closely controlled, well-managed & professional manner.
                        </p>
                    <a href="{{ route('overview') }}" class="about-company-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about-box1">
                        <div class="about-box-img">
                            <img src="{{ asset('public/fontEnd/images/services-2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="choose_area">
        <!-- choose area left -->
        <div class="choose_image">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="choose"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Offer right -->
        <div class="choose_text">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="choose ">
                            <div class="choose_img">
                                <h2>Why choose us ?</h2>
                                <h3>Some lorem ipsum sub heading</h3>
                                <span class="choose_separator"></span>

                                <!-- choose icon -->
                                <div class="choose_icon">
                                    <div class="choose_left">
                                        <span class="flaticon-coffee135">
                                            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="choose_right">
                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum </p>
                                    </div>
                                </div>

                                <!-- choose icon -->
                                <div class="choose_icon">
                                    <div class="choose_left">
                                        <span class="flaticon-trophy71">
                                            <i class="fa fa-smile-o" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="choose_right">
                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum </p>
                                    </div>
                                </div>

                                <!-- choose icon -->
                                <div class="choose_icon">
                                    <div class="choose_left">
                                        <span class="flaticon-like80">
                                            <i class="fa fa-handshake-o" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <div class="choose_right">
                                        <p>Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="our-service" class="section-padding">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Our <span>Service</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-inner owl-carousel">
                        @foreach($services as $service)
                        <div class="service-item">
                            <div class="service-images">
                            <img src="{{ asset('public/storage') }}/{{$service->image}}" alt="">
                            </div>
                            <div class="service-info">
                                <h3>{{$service->title}}</h3>
                            <p>{{ $service->description }}</p>
                            </div><!-- service-info end -->
                        </div>
                       @endforeach
                    </div>
                </div>
            </div><!-- row end -->
        </div><!-- container end -->

    </section>

    <!----------------------------our-service end---------------------->
    <section id="clients-section" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">

                    <div class="client">
                        <div class="section-title">
                            <h2>Our <span>Clients</span></h2>
                        </div>

                        <div class="client-slider owl-carousel">
                            @foreach ( $ourClients as $ourClient)                               
                            <div class="client-slider-item">
                                <img src="{{ asset('public/storage') }}/{{ $ourClient->image }}" alt="">
                            </div><!-- client-slider-item end -->                           
                            @endforeach                           
                        </div><!-- client-slider end -->
                    </div><!-- client end -->

                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">

                    <div class="partner">
                        <div class="section-title">
                            <h2>Our <span>Partner</span></h2>
                        </div>

                        <div class="partner-slider owl-carousel">
                            @foreach ($ourPartners as $ourPartner)
                            <div class="client-slider-item">
                                <img src="{{ asset('public/storage') }}/{{ $ourPartner->image }}" alt="">
                            </div>
                            @endforeach
                        </div><!-- client-slider end -->
                    </div>

                </div><!-- slider item end -->
            </div><!-- Rowr end -->
        </div><!-- Container end -->
    </section> <!-----------------------clients-section end---------------------->
   
    <section id="gallery" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Project <span>Gallery</span></h2>
                    </div>
                </div>
            </div>
            <!--title row end-->
            <div class="row demo-gallery">
                <div id="lightgallery" class="gallary-img  work-inner">

                   @foreach ($gallerys as $gallery)
                    <div class="col-lg-3 col-md-3 col-sm-6" data-src="{{asset('public/storage')}}/{{$gallery->image}}" data-sub-html="<h4>{{$gallery->title}}</h4>">
                        <div class="item-img">
                            <img src="{{asset('public/storage')}}/{{$gallery->image}}" alt="">
                            <div class="item-img-overlay">
                                <h5 class="sm-titl allcaps">{{$gallery->title}}</h5>
                                <div class="icons">
                                    <span class="icon">
                                        <a href="">
                                            <i class="fa fa-image" aria-hidden="true"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!--row end-->
        </div>
        <!--container end-->
    </section>
    <!-----------------------gallery-section end---------------------->

@endsection