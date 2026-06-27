<?php

namespace App\Http\Controllers\Admin;

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
use App\Models\Admin;
use App\Models\Carousel;

use SweetAlert;
use Alert;
use Log;
use Carbon\Carbon;

class AdminController extends Controller
{
    //

    public function index(){
        $setting = Setting::first();
    
        if (!$setting || empty($setting->favicon) || empty($setting->site_name) || empty($setting->logo) || empty($setting->description)) {
            return view('admin.siteSettings', [
                'setting' => $setting
            ]);
        }

        return view('admin.home');
    }

    public function siteSettings(){
        $setting = Setting::first();
        return view('admin.siteSettings', [
            'setting' => $setting,
        ]);
    }

    public function updateSiteSettings(Request $request){
        $validator = Validator::make($request->all(), [
            'logo' => 'nullable|image',
            'favicon' => 'nullable|image',
            'description' => 'nullable|string',
            'site_name' => 'nullable|string',
            'contact_phone' => 'nullable|string',
            'contact_email' => 'nullable|email',
            'contact_address' => 'nullable|string',
        ]);
    
        if ($validator->fails()) {
            alert()->error('Error', $validator->messages()->all()[0])->persistent('Close');
            return redirect()->back();
        }
    
        $siteInfo = new Setting;
        if(!empty($request->site_info_id) && !$siteInfo = Setting::find($request->site_info_id)){
            alert()->error('Oops', 'Invalid Site Information')->persistent('Close');
            return redirect()->back();
        }
    
        if (!empty($request->site_name)) {
            $siteInfo->site_name = $request->site_name;
        }
    
        if (!empty($request->description)) {
            $siteInfo->description = $request->description;
        }
    
        if (!empty($request->contact_phone)) {
            $siteInfo->contact_phone = $request->contact_phone;
        }
    
        if (!empty($request->contact_email)) {
            $siteInfo->contact_email = $request->contact_email;
        }
    
        if (!empty($request->contact_address)) {
            $siteInfo->contact_address = $request->contact_address;
        }

        // Save logo
        $logoUrl = null;
        if ($request->hasFile('logo')) {
            $logoUrl = 'uploads/siteInfo/' .'logo'.'.'.$request->file('logo')->getClientOriginalExtension();
            $logo = $request->file('logo')->move('uploads/siteInfo', $logoUrl);
            $siteInfo->logo = $logoUrl;
        }
    
        // Save favicon
        $faviconUrl = null;
        if ($request->hasFile('favicon')) {
            $faviconUrl = 'uploads/siteInfo/' .'favicon'.'.'.$request->file('favicon')->getClientOriginalExtension();
            $favicon = $request->file('favicon')->move('uploads/siteInfo', $faviconUrl);
            $siteInfo->favicon = $faviconUrl;
        }
    
        if($siteInfo->save()){
            alert()->success('Changes Saved', 'Site information changes saved successfully')->persistent('Close');
            return redirect()->back();
        }
    
        alert()->error('Oops!', 'Something went wrong')->persistent('Close');
        return redirect()->back();
    }

    public function carousel() {
        $carousels = Carousel::all();
        return view('admin.carousel', [
            'carousels' => $carousels,
        ]);
    }

    public function newCarousel(Request $request){
        $validator = Validator::make($request->all(), [
            'tagline' => 'required|string|max:255',
            'hero_heading' => 'nullable|string',
            'button_text' => 'nullable|string|max:100',
            'button_link' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ]);

        if ($validator->fails()) {
            alert()->error('Validation Error', $validator->messages()->first())->persistent('Close');
            return redirect()->back()->withInput();
        }

        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->tagline))) . '-' . time();
        $hashedFolder = md5(uniqid() . time());
        $folderPath = public_path("uploads/carousels/{$hashedFolder}");

        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imageName = 'banner.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($folderPath, $imageName);
            $imagePath = "uploads/carousels/{$hashedFolder}/{$imageName}";
        }

        $carousel = new Carousel([
            'tagline' => $request->tagline,
            'hero_heading' => $request->hero_heading,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'slug' => $slug,
            'upload_folder' => $hashedFolder,
            'image' => $imagePath,
            'status' => 'active', // Default to active on creation
        ]);

        if ($carousel->save()) {
            alert()->success('Success', 'Carousel created successfully')->persistent('Close');
        } else {
            alert()->error('Error', 'Failed to create carousel')->persistent('Close');
        }

        return redirect()->back();
    }

    public function updateCarousel(Request $request){
        $request->validate([
            'carousel_id' => 'required|exists:carousels,id',
            'tagline' => 'required|string|max:255',
            'hero_heading' => 'nullable|string',
            'button_text' => 'nullable|string|max:100',
            'button_link' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $carousel = Carousel::findOrFail($request->carousel_id);
    
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->tagline))) . '-' . $carousel->id;
    
        if (!$carousel->upload_folder) {
            $hashedFolder = md5($carousel->id . uniqid());
            $carousel->upload_folder = $hashedFolder;
            $carousel->save();
        } else {
            $hashedFolder = $carousel->upload_folder;
        }
    
        $folderPath = public_path("uploads/carousels/{$hashedFolder}");
        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0777, true);
        }
    
        $imageUrl = $carousel->image;
        if ($request->hasFile('image')) {
            $imageName = 'banner.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($folderPath, $imageName);
            $imageUrl = "uploads/carousels/{$hashedFolder}/{$imageName}";
        }
    
        $carousel->fill([
            'tagline' => $request->tagline,
            'hero_heading' => $request->hero_heading,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'image' => $imageUrl,
            'slug' => $slug,
        ]);
    
        if ($carousel->isDirty()) {
            if ($carousel->save()) {
                alert()->success('Success', 'Carousel updated successfully')->persistent('Close');
            } else {
                alert()->error('Oops!', 'Something went wrong while saving changes')->persistent('Close');
            }
        } else {
            alert()->info('No Changes', 'No updates were made')->persistent('Close');
        }
    
        return redirect()->back();
    }

    public function setCarouselStatus(Request $request){
        $validator = Validator::make($request->all(), [
            'carousel_id' => 'required|exists:carousels,id',
            'status' => 'required|in:active,inactive',
        ]);

        if ($validator->fails()) {
            alert()->error('Error', $validator->messages()->first())->persistent('Close');
            return redirect()->back();
        }

        $carousel = Carousel::findOrFail($request->carousel_id);
        $carousel->status = $request->status;

        if ($carousel->save()) {
            alert()->success('Updated', 'Carousel status changed successfully');
        } else {
            alert()->error('Oops!', 'Failed to update status')->persistent('Close');
        }

        return redirect()->back();
    }
    
    public function deleteCarousel(Request $request){
        $validator = Validator::make($request->all(), [
            'carousel_id' => 'required',
        ]);

        if ($validator->fails()) {
            alert()->error('Error', $validator->messages()->all()[0])->persistent('Close');
            return redirect()->back();
        }

        if(!$carousel = Carousel::find($request->carousel_id)){
            alert()->error('Oops', 'Invalid Carousel Item')->persistent('Close');
            return redirect()->back();
        }

        if($carousel->delete()) {
            alert()->success('Deleted', 'Carousel item successfully deleted');
            return redirect()->back();
        }

        alert()->error('Oops!', 'Something went wrong')->persistent('Close');
        return redirect()->back();
    }

    public function about(){
        return view('admin.about');
    }
    
}
