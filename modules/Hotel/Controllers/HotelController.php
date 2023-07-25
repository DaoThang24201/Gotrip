<?php

namespace Modules\Hotel\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Modules\Hotel\Models\Amenity;
use Modules\Hotel\Models\Deal;
use Modules\Hotel\Models\Facilities;
use Modules\Hotel\Models\GuestRating;
use Modules\Hotel\Models\GuestReview;
use Modules\Hotel\Models\Hotel;
use Modules\Hotel\Models\HotelComment;
use Modules\Hotel\Models\Neighbor;
use Modules\Hotel\Models\PopularFilter;
use Modules\Hotel\Models\Property;
use Modules\Hotel\Models\Style;

class HotelController extends Controller
{

    function index(Request $request) {

        $query = Hotel::query();

        /*Search*/
        if ($search = $request->query('search')){
            $query->where('title','like', '%'.$search.'%');
        }

        /*Deal*/
        if ($deal_id = $request->query('deal_id')) {
            $query->where('deal_id', $deal_id);
        }
        /*Popular Filter*/
        if ($popular_filter_id = $request->query('popular_filter_id')) {
            $query->where('popular_filter_id', $popular_filter_id);
        }
        /*Amenities*/
        if ($amenity_id = $request->query('amenity_id')) {
            $query->where('amenity_id', $amenity_id);
        }
        /*Guest Rating*/
        if ($guest_rating_id = $request->query('guest_rating_id')) {
            $query->where('guest_rating_id', $guest_rating_id);
        }
        /*Style*/
        if ($style_id = $request->query('style_id')) {
            $query->where('style_id', $style_id);
        }
        /*Neighborhood*/
        if ($neighbor_id = $request->query('neighbor_id')) {
            $query->where('neighbor_id', $neighbor_id);
        }

        /*if ($min_price = $request->query('min_price') && $max_price = $request->query('max_price')) {
            $query->whereBetween('price',[$min_price, $max_price]);
        }*/

        $hotels = $query->paginate(3)->withQueryString();

        $deals = Deal::all();

        $popular_filters = PopularFilter::all();

        $amenities = Amenity::all();

        $guest_ratings = GuestRating::all();

        $styles = Style::all();

        $neighbors = Neighbor::all();

        return view('Hotel::frontend.index',compact('hotels','deals','popular_filters','amenities','guest_ratings','styles','neighbors'));
    }

    function show($slug) {

        $query = Hotel::query();

        $hotel = $query->where('slug',$slug)->first();

        $properties = Property::where('hotel_id',$hotel->id)->get();

        $facilities = Facilities::where('hotel_id',$hotel->id)->get();

        $related_hotels = Hotel::where('deal_id',$hotel->deal_id)->get();

        $comments = HotelComment::where('hotel_id',$hotel->id)->get();

        return view('Hotel::frontend.show',compact('hotel','properties','facilities','related_hotels','comments'));
    }
}
