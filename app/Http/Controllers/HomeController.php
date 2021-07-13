<?php

namespace App\Http\Controllers;

use App\Models\Camp;
use App\Models\Department;
use App\Models\Emoje;
use App\Models\Entertainment;
use App\Models\Galary;
use App\Models\Item;
use App\Models\ItemsService;
use App\Models\MediaStep;
use App\Models\Newsletter;
use App\Models\Offer;
use App\Models\Partner;
use App\Models\Qa;
use App\Models\Restaurant;
use App\Models\Service;
use App\Models\Shop;
use App\Models\Slider;
use App\Models\Unit;
use App\Models\UnitCategory;
use App\Models\Website;
use Carbon\Carbon;
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

        $sliders = Slider::where('type', 'slider')->orderBy('order', 'desc')->get();
        $icons = Slider::where('type', 'icon')->orderBy('order', 'desc')->get();
        $offerIcons = Slider::where('type', 'offer-icon')->orderBy('order', 'desc')->get();
        $items = Item::latest()->limit(8)->get();

        $department = Department::where('slug', 'shop')->first();
        $shops = Unit::where('department_id', $department->id)->get();
        $shops_count= $shops->count();

        $department = Department::where('slug', 'entertainment')->first();
        $entertainments = Unit::where('department_id', $department->id)->latest()->get();
        $entertainments_count=$entertainments->count();


        $department = Department::where('slug', 'restaurant')->first();
        $restaurants = Unit::where('department_id', $department->id)->latest()->get();
        $restaurants_count=$restaurants->count();

        $services=Service::get();
        $services_count=$services->count();

        $offers=Offer::get();
        $offers_count=$offers->count();

        $t=    Carbon::now();
       strtoupper(substr($t->format('l'), 0, 3));



        return view('front.home', compact('sliders', 'icons', 'offerIcons', 'items','shops_count','entertainments_count','restaurants_count'
    ,'services_count','offers_count'
    ));
    }
    public function entertainment()
    {
        $department = Department::where('slug', 'entertainment')->first();
        $units = Unit::where('department_id', $department->id)->latest()->get();
        return view('front.units', compact('units'));
    }
    public function shop()
    {
        $department = Department::where('slug', 'shop')->first();
        $units = Unit::where('department_id', $department->id)->latest()->get();
        return view('front.units', compact('units'));
    }
    public function restaurant()
    {
        $department = Department::where('slug', 'restaurant')->first();
        $units = Unit::where('department_id', $department->id)->latest()->get();
        return view('front.units', compact('units'));
    }
    public function emoje()
    {
        $emoje = Emoje::first();
        $camp = Camp::first();
        $why_qas = Qa::where('section', 'why-emoji')->get();
        $what_qas = Qa::where('section', 'what-emoji')->get();
        $gallary = Galary::get();
        $partners = Partner::get();

        return view('front.kids', compact('emoje', 'camp', 'why_qas', 'what_qas', 'gallary', 'partners'));
    }
    public function media()
    {
        $what_qas = Qa::where('section', 'media-ques')->get();
        $steps = MediaStep::orderBy('step', 'asc')->get();
        return view('front.media', compact('what_qas', 'steps'));
    }
    public function services()
    {
        $services = Service::get();
        return view('front.services', compact('services'));
    }
    public function items_service($id = null)
    {
        if (!empty($id))
            $items_services = ItemsService::where('service_id', $id)->get();
        else  $items_services = ItemsService::get();
        return view('front.items_service', compact('items_services'));
    }
    // 
    public function offers()
    {
        $items = Item::whereHas('offers')->get();

        return view('front.items', compact('items'));
    }
    public function qs_details($qs_id)
    {
        if (!empty($qs_id)) {

            $what_qas = Qa::where('id', $qs_id)->first();

            return response()->json(['success' => true, 'result' => $what_qas]);
        }
        return response()->json(['success' => false, 'errors' => [0 => 'Not Found Data']]);
    }

    public function item_details($item_id)
    {

        $offer = 0;
        if (!empty($item_id)) {

            $item = Item::find($item_id);

            if (count($item->offers) > 0)   $offer = 1;

            return response()->json(['success' => true, 'result' => $item, 'offer' => $offer]);
        }
        return response()->json(['success' => false, 'errors' => [0 => 'Not Found Data']]);
    }
    public function item_service_details($item_id)
    {
        if (!empty($item_id)) {

            $item = ItemsService::find($item_id);

            return response()->json(['success' => true, 'result' => $item]);
        }
        return response()->json(['success' => false, 'errors' => [0 => 'Not Found Data']]);
    }
    public function items($id)
    {
        $unit_id = $id;
        $items = Item::where('unit_id', $id)->get();
        return view('front.items', compact('items', 'unit_id'));
    }
    public function itemsByCategory($cat_id, $unit_id)
    {

        $items = Item::where('category_id', $cat_id)->get();
     
        return view('front.items', compact('items', 'unit_id'));
    }
    public function photos()
    {
        $photos = Galary::get();
        return view('front.photos', compact('photos'));
    }
    public function newsLetter(Request $request)
    {

        $input = $request->all();
        $saved = Newsletter::create($input);
        if ($saved) {

            return response()->json(['message' => 'Success!']);
        } else {
            return response()->json(['message' => 'Error!']);
        }
    }
}
