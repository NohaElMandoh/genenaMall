<?php

namespace App\Http\Controllers;

use App\Models\Camp;
use App\Models\Department;
use App\Models\Emoje;
use App\Models\Entertainment;
use App\Models\Galary;
use App\Models\Item;
use App\Models\MediaStep;
use App\Models\Newsletter;
use App\Models\Partner;
use App\Models\Qa;
use App\Models\Restaurant;
use App\Models\Service;
use App\Models\Shop;
use App\Models\Slider;
use App\Models\Unit;
use App\Models\Website;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        $sliders=Slider::where('type','slider')->orderBy('order','desc')->get();
        $icons=Slider::where('type','icon')->orderBy('order','desc')->get();
        $offerIcons=Slider::where('type','offer-icon')->orderBy('order','desc')->get();

        return view('front.home',compact('sliders','icons','offerIcons'));
    }
    public function entertainment()
    {
        $department=Department::where('slug','entertainment')->first();
        $units=Unit::where('department_id',$department->id)->latest()->get();
        return view('front.units',compact('units'));
    }
    public function shop()
    {
        $department=Department::where('slug','shop')->first();
        $units=Unit::where('department_id',$department->id)->latest()->get();
        return view('front.units',compact('units'));
    }
    public function restaurant()
    {
        $department=Department::where('slug','restaurant')->first();
        $units=Unit::where('department_id',$department->id)->latest()->get();
        return view('front.units',compact('units'));
    }
    public function emoje()
    {
        $emoje=Emoje::first();
        $camp=Camp::first();
        $why_qas=Qa::where('section','why-emoji')->get();
        $what_qas=Qa::where('section','what-emoji')->get();
        $gallary=Galary::get();
        $partners=Partner::get();
        
        return view('front.kids',compact('emoje','camp','why_qas','what_qas','gallary','partners'));
    }
    public function media()
    {
        $what_qas=Qa::where('section','media-ques')->get();
        $steps=MediaStep::orderBy('step','asc')->get();
        return view('front.media',compact('what_qas','steps'));
    }
    public function services()
    {
        $services=Service::get();
        return view('front.services',compact('services'));
    }
    public function qs_details($qs_id)
    {
        if (!empty($qs_id)) {
            
            $what_qas=Qa::where('id',$qs_id)->first();
        
            return response()->json(['success' => true, 'result' => $what_qas]);
        }
        return response()->json(['success' => false, 'errors' => [0 => 'Not Found Data']]);

    }
    public function items($id)
    {

     $items=Item::where('unit_id',$id);
        return view('front.items',compact('items'));
    }
    public function photos()
    {
     $photos=Galary::get();
        return view('front.photos',compact('photos'));
    }
    public function newsLetter(Request $request)
    {
     
      $input = $request->all();
      $saved = Newsletter::create($input);
      if ($saved) {
         
          return response()->json(['message' => 'Success!']);
      }else{
          return response()->json(['message' => 'Error!']);
      }
    }
}
