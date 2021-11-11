<?php

namespace App\Http\Livewire\LagosBusiness\Review;

use Livewire\Component;
use App\Models\Business;
use App\Models\Review;

class ReviewList extends Component
{
    public $business;
    public $reviews;
    public $total_rating;

    public function mount()
    {

        $this->business = Business::where('owner_id', auth()->user()->id)->first();
        $this->reviews = Review::where('business_id', $this->business->id)->get();
        $this->total_rating = Review::where('business_id', $this->business->id)->average('rating');
    }

    public function render()
    {
        return view('livewire.lagos-business.review.review-list');
    }
}
