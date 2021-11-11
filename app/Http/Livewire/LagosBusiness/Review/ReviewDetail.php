<?php

namespace App\Http\Livewire\LagosBusiness\Review;

use Livewire\Component;
use App\Models\Review;

class ReviewDetail extends Component
{
    public Review $review;
    
    public function mount($id)
    {
        $this->review = Review::find($id);
    }

    public function render()
    {
        return view('livewire.lagos-business.review.review-detail');
    }
}
