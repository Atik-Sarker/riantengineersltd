@extends('fontEnd.layouts.master')

@section('content')
<section id="overview" class="section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="section-title padding0">
                    <h2>HEALTH SAFETY AND WELFARE</h2>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="overview-info">
                    <p>
                        This statement recognizes RIANT’s obligations and accepts its responsibility as an employer for providing a safe and healthy working environment on premises and property under its control. It is the policy of Riant toperate working practices which make proper provision for the health, safety and welfare at work for employees and anyone else that may be affected by our operations.<br>
                        Riant in the conduct of its activities will ensure that it:
                    </p>
                    <ul style="list-style: none;">
                        <li><i class="fa fa-medkit" aria-hidden="true"></i> Protects the health, safety and welfare of its employees and others who may be affected by its activities.</li>
                        <li><i class="fa fa-medkit" aria-hidden="true"></i> Limits adverse effects on and adjacent to the area in which those activities are carried out.</li>
                        <li><i class="fa fa-medkit" aria-hidden="true"></i> Meets its responsibilities as an employer to do all that is reasonably practicable to prevent accidents, injuries and damage to health.</li>
                    </ul>
                </div>
                <!------------- overview-info end -------------->
            </div>
        </div>
        <div class="health-image">
            <div class="row">
                 <div class="col-lg-6">
                    <img src="{{ asset('public/storage/image/health-pic1.jpg') }}" alt="">
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('public/storage/image/health-pic2.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection