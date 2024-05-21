<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviewModel = new Review;
        $reviews = $review->getAllReview();
        return view('review', ['reviews' => $reviews]);
    }
}
