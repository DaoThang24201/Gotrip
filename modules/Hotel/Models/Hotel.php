<?php

namespace Modules\Hotel\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $table = 'hotels';

    public function rooms() {
        return $this->belongsTo(Room::class,'room_id');
    }

    public function services() {
        return $this->belongsToMany(Service::class,HotelService::class,'hotel_id','service_id');
    }

    public function reviews() {
        return $this->hasMany(GuestReview::class,'hotel_id');
}

    public function images() {
        return $this->hasMany(HotelImage::class, 'hotel_id');
    }

    public function deal() {
        return $this->belongsTo(Deal::class,'deal_id');
    }

    public function popularFilter() {
        return $this->belongsTo(PopularFilter::class,'popular_filter_id');
    }

    public function amenity() {
        return $this->belongsTo(Amenity::class,'amenity_id');
    }

    public function guestRating() {
        return $this->belongsTo(GuestRating::class,'guest_rating_id');
    }

    public function style() {
        return $this->belongsTo(Style::class,'style_id');
    }

    public function neighbor() {
        return $this->belongsTo(Neighbor::class,'neighbor_id');
    }

    public function properties() {
        return $this->hasMany(Property::class,'hotel_id');
    }

    public function facilities() {
        return $this->hasMany(Facilities::class,'hotel_id');
    }

    public function comments() {
        return $this->hasMany(HotelComment::class,'hotel_id');
    }
}
