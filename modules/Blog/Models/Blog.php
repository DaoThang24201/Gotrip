<?php

namespace Modules\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    public function auth() {
        return $this->belongsTo(Auth::class,'auth_id');
    }

    public function category() {
        return $this->belongsTo(BlogCategory::class,'category_id');
    }

    public function blogImages() {
        return $this->hasMany(BlogImage::class,'blog_id');
    }

    public function blogComments() {
        return $this->hasMany(BlogComment::class,'blog_id');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, BlogTag::class,'blog_id','tag_id');
    }
}
