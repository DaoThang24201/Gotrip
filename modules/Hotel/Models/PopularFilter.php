<?php

namespace Modules\Hotel\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopularFilter extends Model
{
    use HasFactory;

    protected $table = 'popular_filters';
}
