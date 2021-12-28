<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Business;

class BusinessType extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getBusinessNumberAttribute()
    {
        return Business::where('business_type_id', $this->id)->where('approved', true)->count();
    }
}
