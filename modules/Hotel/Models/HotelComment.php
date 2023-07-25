<?php

namespace Modules\Hotel\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Blog\Models\CommentImage;
use Modules\Blog\Models\User;

class HotelComment extends Model
{
    use HasFactory;

    protected $table = 'hotel_comments';

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }

    public function commentImages() {
        return $this->hasMany(CommentImage::class,'comment_id');
    }
}
