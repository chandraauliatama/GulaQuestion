<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Product;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function create(Product $product)
    {
        return view('feedback', compact('product'));
    }

    public function store(Request $request)
    {
        // $userProduct = auth()->user()->userProducts()->create($request->all());
        $feedback = Feedback::create($request->all());
        if ($request->hasFile('image1')) {
            $feedback->addMediaFromRequest('image1')->toMediaCollection('images1');
        }
        if ($request->hasFile('image2')) {
            $feedback->addMediaFromRequest('image2')->toMediaCollection('images2');
        }

        return redirect()->route('product.show', $request->product_id);
    }
}
