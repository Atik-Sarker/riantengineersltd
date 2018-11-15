@extends('fontEnd.layouts.master')

@section('content')
<section id="overview" class="section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="section-title padding0">
                    <h2>Automation & Instrumentation</h2>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="power-energy-info">
                    <p>
                        Riant is the first organization embarked in the horizon of Bangladesh in view to providing complete automation solution to serve local industries with local and foreign resources. Being a dynamic and continuously growing system integrator of SIEMENS Bangladesh Ltd, we can meet our clients’ needs flexibly and professionally.
                        We can provide comprehensive solution to problem and our engineering team is capable of handling complex and demanding applications from system design to install and commission on your plant floor. This means first and effective implementation of your new technology at lower cost.
                        Riant holds the cogent technological knowhow to program, install and tune a diverse variety of PLCs for many different Processes.
                        Riant is one of the leading programmers of Siemens in Bangladesh.
                    </p>
                    <ul style="list-style: none;">
                        <li><i class="fa fa-building" aria-hidden="true"></i> PLC control Programming
                        </li>
                        <li><i class="fa fa-building" aria-hidden="true"></i> Operator interface programming
                        </li>
                        <li><i class="fa fa-building" aria-hidden="true"></i> PC-based control Programming with field communication</li>
                        <li><i class="fa fa-building" aria-hidden="true"></i>HMI/SCADA programming</li>
                        <li><i class="fa fa-building" aria-hidden="true"></i> Installation, Programming and commissioning of various types DC & AC drives.</li>
                        <li><i class="fa fa-building" aria-hidden="true"></i> Installation and commissioning of various instrumentation works.</li>
                        <li><i class="fa fa-building" aria-hidden="true"></i> Industrial control panel design and assembly</li>
                    </ul>
                    <p>
                        Riant Engineers Ltd has so far carried out Process Automation works in different heavy Industries with our local expert like Paper mills, Steel mills, Sugar Mills, Fertilizers, Pharmaceuticals, Textile etc. with complete satisfaction of the client.
                    </p>
                </div>
                <!------------- overview-info end -------------->
            </div>
        </div>
        <div class="health-image">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title mb-20">
                        <h2>Few of the worth mentioning works</h2>
                    </div>
                    <div class="comon-slider owl-carousel">
                        <div class="slider-item">
                            <img src="{{ asset('public/storage/image/Automation-1.jpg') }}" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="{{ asset('public/storage/image/Automation-2.jpg') }}" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="{{ asset('public/storage/image/Automation-3.jpg') }}" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="{{ asset('public/storage/image/Automation-4.jpg') }}" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="{{ asset('public/storage/image/Automation-6.jpg') }}" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="{{ asset('public/storage/image/Automation-5.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------- overview-info end -------------->
</section>

@endsection