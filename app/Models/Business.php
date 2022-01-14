<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;

class Business extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['review_count', 'review_rating','price_rating'];

    public function businesstype()
    {
        return $this->hasOne('App\Models\BusinessType', 'id', 'business_type_id');
    }
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'business_id', 'id');
    }
    public function services()
    {
        return $this->hasMany('App\Models\Service', 'business_id', 'id');
    }
    public function amenities()
    {
        return $this->hasMany('App\Models\Amenity', 'business_id', 'id');
    }

    public function getReviewCountAttribute()
    {
        return Review::where('business_id', $this->id)->count();
    }

    public function getReviewRatingAttribute()
    {
        $review_count = Review::where('business_id', $this->id)->count();
        if ($review_count)
            return Review::where('business_id', $this->id)->average('rating');
        else
            return 0;
    }
    public function getPriceRatingAttribute()
    {
        $review_count = Review::where('business_id', $this->id)->count();
        if ($review_count)
            return Review::where('business_id', $this->id)->average('price_rating');
        else
            return 0;
    }

}
