<?php
namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
       
        $reviews = Review::all();
        return view('reviews.review', compact('reviews'));
    }

    public function create()
    {
        $movies = Movie::all();
        return view('reviews.create', compact('movies'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'movie_id' => 'required',
            'user' => 'required',
            'rating' => 'required',
            'date' => 'required',
        ]);
    
        Review::create($validatedData);
    
        return redirect('/review')->with('success', 'Movie added successfully!');
    }

    public function destroy(Review $review)
{
    $review->delete();
    return redirect('/review')->with('success', 'Movie deleted successfully!');
}






public function edit(Review $review)
{
    $movies = Movie::all();
    return view('reviews.edit', compact( 'review', 'movies'));
}

public function update(Request $request, Review $review)
{
$validatedData = $request->validate([
    'movie_id' => 'required',
            'user' => 'required',
            'rating' => 'required',
            'date' => 'required',
    
]);

$review->update($validatedData);

return redirect('/reviews')->with('success', 'Movie updated successfully!');
}







}