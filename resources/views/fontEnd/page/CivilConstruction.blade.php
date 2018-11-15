@extends('fontEnd.layouts.master')

@section('content')

<section id="overview" class="section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="section-title padding0">
                    <h2>Civil Engineering</h2>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="power-energy-info">
                    <p>
                        Riant Engineers Ltd has over the past few years (Since 2006) been constructing Real Estate and Factory with reputation. The company's capabilities span the entire gamut of construction civil core sector industries and infrastructure projects. The company worked on complete turn-key 7 nos 33/11kV Sub-Station with control building & equipment foundation.
                        Riant Engineers Ltd. straddles Seven related construction businesses-
                    </p>
                    <ul style="list-style: none;">
                        <li><i class="fa fa-building" aria-hidden="true"></i> Construction of Commercial Buildings
                        </li>
                        <li><i class="fa fa-building" aria-hidden="true"></i> Construction of Industrial Buildings
                        </li>
                        <li><i class="fa fa-building" aria-hidden="true"></i> Construction of Powerhouse Control Buildings</li>
                        <li><i class="fa fa-building" aria-hidden="true"></i>Construction of Equipment Foundation.</li>
                        <li><i class="fa fa-building" aria-hidden="true"></i> Construction of Transportation Infrastructure.</li>
                        <li><i class="fa fa-building" aria-hidden="true"></i> Construction of Heavy Civil Infrastructure</li>
                        <li><i class="fa fa-building" aria-hidden="true"></i> Construction of Power Transmission & Distribution</li>
                        <li><i class="fa fa-building" aria-hidden="true"></i> Construction of Residential Building</li>
                        <li><i class="fa fa-building" aria-hidden="true"></i> Renovation, Retrofitting & Modification work</li>
                    </ul>
                    <p>
                        RIANT ENGINEERS LTD offers a broad spectrum of Engineering, Design, Research and Consultancy services, ranging from concept to commissioning for all types of projects
                    </p>
                </div>
                <!------------- overview-info end -------------->
            </div>
        </div>
        <div class="health-image">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title mb-20">
                        <h2>Few of the worth mentioning civil jobs</h2>
                    </div>
                    <div class="comon-slider owl-carousel">
                        <div class="slider-item">
                        <img src="{{asset('public/storage/image/construction-1.jpg')}}" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="{{asset('public/storage/image/construction-2.jpg')}}" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="{{asset('public/storage/image/construction-3.jpg')}}" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="{{asset('public/storage/image/construction-4.jpg')}}" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="{{asset('public/storage/image/construction-5.jpg')}}" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="{{asset('public/storage/image/construction-6.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------- overview-info end -------------->
</section>

@endsection