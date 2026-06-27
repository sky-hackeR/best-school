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

class PageController extends Controller
{
    //

    public function index(){
        $carousels = Carousel::where('status', 'active')->get();
        return view('landing.welcome', [
            'carousels' => $carousels,
        ]);
    }

    public function about(){
        return view('landing.pages.about');
    }
}
