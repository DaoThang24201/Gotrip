<?php

namespace Modules\Hotel\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestRating extends Model
{
    use HasFactory;

    protected $table = 'guest_ratings';
}
