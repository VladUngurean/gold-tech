<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Review;

class ReviewController extends Controller
{
    public function index() {
        $reviews = Review::all();
        return view('panel/reviews/index', ['reviews' => $reviews]);
    }
    public function create() {
        return view('panel/reviews/create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'client_name' => 'required',
            'review_post_date' => 'required',
            'review_content' => 'required',
            'project_name' => 'required',
            'project_realisation_date' => 'required',
        ]);

        $newReview = Review::create($data);

        return redirect(route('review'));
    }
}
