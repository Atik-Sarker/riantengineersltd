<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slider;
use App\Logo;
use App\Gallery;
use App\Service;
use Brian2694\Toastr\Facades\Toastr;

class BaseController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = slider::where('status', true)->orderBy('created_at','desc')->get();

         $logo = Logo::where([
            'type' => 1,
            'status' => true,
         ])->orderBy('created_at','desc')->first();


         $ourClients = Logo::where([
            'type' => 2,
            'status' => true,
         ])->orderBy('created_at','desc')->get();

         $ourPartners = Logo::where([
            'type' => 3,
            'status' => true,
         ])->orderBy('created_at','desc')->get();

         $gallerys = Gallery::where('status', true)->orderBy('created_at','desc')->limit('8',0)->get();
         $services = Service::where('status', true)->orderBy('created_at','desc')->get();

        return view('fontEnd.index', compact('sliders','ourClients','ourPartners', 'logo', 'gallerys','services'));
    }

    
    public function PowerEnergy()
    {
        $logo = Logo::where([
            'type' => 1,
            'status' => true,
         ])->orderBy('created_at','desc')->first();
        return view('fontEnd.page.PowerEnergy', compact('logo'));
    }

   
    public function CivilConstruction()
    {
        $logo = Logo::where([
            'type' => 1,
            'status' => true,
         ])->orderBy('created_at','desc')->first();
        return view('fontEnd.page.CivilConstruction', compact('logo'));
    }

 
    public function Mechanical()
    {
        $logo = Logo::where([
            'type' => 1,
            'status' => true,
         ])->orderBy('created_at','desc')->first();
        return view('fontEnd.page.Mechanical', compact('logo'));
    }

   function Automation()
    {
        $logo = Logo::where([
            'type' => 1,
            'status' => true,
         ])->orderBy('created_at','desc')->first();
        return view('fontEnd.page.automation', compact('logo'));
    }

   
    public function RealState()
    {
        $logo = Logo::where([
            'type' => 1,
            'status' => true,
         ])->orderBy('created_at','desc')->first();
        return view('fontEnd.page.RealState', compact('logo'));
    }

    
    public function HealthSafty()
    {
        $logo = Logo::where([
            'type' => 1,
            'status' => true,
         ])->orderBy('created_at','desc')->first();
        return view('fontEnd.page.HealthSafty', compact('logo'));
    }


    public function QualityManagement()
    {
        $logo = Logo::where([
            'type' => 1,
            'status' => true,
         ])->orderBy('created_at','desc')->first();
        return view('fontEnd.page.QualityManagement', compact('logo'));
    }


    public function Environment()
    {
        $logo = Logo::where([
            'type' => 1,
            'status' => true,
         ])->orderBy('created_at','desc')->first();
        return view('fontEnd.page.Environment', compact('logo'));
    }
    public function Gallery()
    {
        $logo = Logo::where([
            'type' => 1,
            'status' => true,
         ])->orderBy('created_at','desc')->first();

         $gallerys = Gallery::where('status', true)->orderBy('created_at','desc')->paginate(16);

        return view('fontEnd.page.Gallery', compact('logo', 'gallerys'));
    }
    public function Contact()
    {
        $logo = Logo::where([
            'type' => 1,
            'status' => true,
         ])->orderBy('created_at','desc')->first();

        return view('fontEnd.page.Contact', compact('logo'));
    }
    public function overview()
    {
        $logo = Logo::where([
            'type' => 1,
            'status' => true,
         ])->orderBy('created_at','desc')->first();

        return view('fontEnd.page.overview', compact('logo'));
    }

    public function VisionMission()
    {
        $logo = Logo::where([
            'type' => 1,
            'status' => true,
         ])->orderBy('created_at','desc')->first();

        return view('fontEnd.page.VisionMission', compact('logo'));
    }

    public function Management()
    {
        $logo = Logo::where([
            'type' => 1,
            'status' => true,
         ])->orderBy('created_at','desc')->first();

        return view('fontEnd.page.Management', compact('logo'));
    }

    public function keyPerson()
    {
        $logo = Logo::where([
            'type' => 1,
            'status' => true,
         ])->orderBy('created_at','desc')->first();

        return view('fontEnd.page.keyPerson', compact('logo'));
    }












    
}
