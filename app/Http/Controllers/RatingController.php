<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Request $request, Product $product)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $rating = Rating::updateOrCreate(
            ['user_id' => auth()->id(), 'product_id' => $product->id],
            ['rating' => $request->rating]
        );

        return redirect()->back()->with('success', 'Product rated successfully.');
    }
}

