<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SearchResult extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function businesstype()
    {
        return $this->hasOne('App\Models\BusinessType', 'id', 'business_type_id');
    }
}
