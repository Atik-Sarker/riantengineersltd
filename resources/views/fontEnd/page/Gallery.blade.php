@extends('fontEnd.layouts.master')

@section('content')
   
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
                    <div class="col-lg-12 text-right">
                        {{ $gallerys->links() }}
                    </div>
                </div>
            </div>
            <!--row end-->
        </div>
        <!--container end-->
    </section>
    <!-----------------------gallery-section end---------------------->

@endsection