<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

use App\Models\SiteInfo as Setting;
use App\Models\Carousel;
use App\Models\SchoolHistory;
use App\Models\VisionMission;
use App\Models\SchoolAnthem;
use App\Models\Gallery;
use App\Models\Management;
use App\Models\AcademicProgramme;




class PageController extends Controller
{
    //

    public function index(){
        $carousels = Carousel::where('status', 'active')->get();
        $history = SchoolHistory::first();
        $visionMission = VisionMission::first();
        $management = Management::where('status', 'active')->get();
        $programmes = AcademicProgramme::all();
        return view('landing.welcome', [
            'carousels' => $carousels,
            'history' => $history,
            'visionMission' => $visionMission,
            'management' => $management,
            'programmes' => $programmes,    
        ]);
    }

    public function about(){
        $anthem = SchoolAnthem::first();
        $visionMission = VisionMission::first();
        $history = SchoolHistory::first();
        return view('landing.pages.about', [
            'anthem' => $anthem,
            'visionMission' => $visionMission,
            'history' => $history,
        ]);
    }

    public function contact(){
        return view('landing.pages.contact');
    }

    public function gallery(){
        $galleries = Gallery::where('status', 'active')->get();
        return view('landing.pages.gallery', [
            'galleries' => $galleries,
        
        ]);
    }

    public function academicProgrammes(){
        $programmes = AcademicProgramme::all();
        return view('landing.pages.academicProgrammes', [
            'programmes' => $programmes,
        ]);
    
    }


}
