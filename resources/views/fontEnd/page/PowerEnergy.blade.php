@extends('fontEnd.layouts.master')

@section('content')
<section id="overview" class="section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="section-title padding0">
                    <h2>ELECTRICAL ENGINEERING</h2>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="power-energy-info">
                    <p>
                        Riant Engineers Ltd is leading the future of electrification with advance technologies that distribute, protect and control. We provide customers, across various industries, with end-to end product and service solutions that ensure the reliability and protection of the electrical infrastructure; from the power station to the end point and all the sustainable power technology in between.<br>
                        We deliver advanced technologies that touch all parts of the electrical infrastructure - from the substation, to a facility's critical equipment, and all the power technologies in between. Our engagement with client starts at the design stage, advances through product installation and continues with ongoing service offerings designed to optimize the lifecycle of their equipment. The training, consulting and maintenance services that Industrial Solutions offers customers after installation enables them to get the most from their electrical and power systems.
                    </p>
                    <ul style="list-style: none;">
                        <li><i class="fa fa-cogs" aria-hidden="true"></i> Electrical Consultants &amp; turnkey contactors and A to Z electrical service provider.</li>
                        <li><i class="fa fa-cogs" aria-hidden="true"></i> Supply, Installation, testing &amp; commissioning of Electrical Utilities (Sub- stations, Power control center, MCC, Boiler equipment’s &amp; water-treatment plant etc.)</li>
                        <li><i class="fa fa-cogs" aria-hidden="true"></i> Drawing &amp; design of Electrical systems for new, renovation/ Re-modeling project.</li>
                        <li><i class="fa fa-cogs" aria-hidden="true"></i> Design &amp; Installation of Industrial, commercial &amp; Domestic Power Distribution system, Lighting System together with statutory requirements.</li>
                        <li><i class="fa fa-cogs" aria-hidden="true"></i> Manufacture of HT-LT panels, MCC &amp; PCC panels, PFI, MDB, DB and any other panel board of various sizes including industrial lighting sets, cable duct etc.</li>
                        <li><i class="fa fa-cogs" aria-hidden="true"></i> Maintenance, Preventive maintenance, Pre-construction services and procurement.</li>
                        <li><i class="fa fa-cogs" aria-hidden="true"></i> Perform Energy Audit at Industrial &amp; Commercial Power Distribution systems.</li>
                    </ul>
                </div>
                <!------------- overview-info end -------------->
            </div>
        </div>
        <div class="health-image">
            <div class="row">
                <div class="col-lg-12">
                  <div class="title mb-20">
                      <h2>Some of Electrical Works</h2>
                  </div>
                   <div class="comon-slider owl-carousel">
                       <div class="slider-item">
                       <img src="{{ asset('public/storage/image/electrical1.jpg')}}" alt="">
                       </div> 
                       <div class="slider-item">
                        <img src="{{ asset('public/storage/image/electrical2.jpg')}}" alt="">
                       </div> 
                       <div class="slider-item">
                        <img src="{{ asset('public/storage/image/electrical3.jpg')}}" alt="">
                       </div>                          
                   </div>
                </div>
            </div>
        </div>
        <!------------- overview-info end -------------->
</section>
@endsection
