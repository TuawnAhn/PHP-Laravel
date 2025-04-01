<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $query = Review::with(['customer', 'product']);

        if ($request->filled('customer_id')) {
            $query->where('customer_id', $request->customer_id);
        }

        if ($request->filled('product_id')) {
            $query->where('product_id', $request->product_id);
        }

        if ($request->filled('rating')) {
            $query->where('rating', $request->rating);
        }

        $query->orderBy('id', 'desc');
        $reviews = $query->paginate(10);

        $customers = Customer::all();
        $products = Product::all();

        return view('admin.reviews.index', compact('reviews', 'customers', 'products'));
    }

    public function show($id)
    {
        $review = Review::with(['customer', 'product'])->findOrFail($id);
        return view('admin.reviews.show', compact('review'));
    }

    public function create()
    {
        $customers = Customer::all();
        $products = Product::all();
        return view('admin.reviews.create', compact('customers', 'products'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'product_id'  => 'required|exists:products,id',
            'content'     => 'nullable|string',
            'rating'      => 'required|integer|min:1|max:5',
        ]);

        Review::create($data);
        return redirect()->route('admin.reviews.index');
    }

    public function edit($id)
    {
        $review = Review::findOrFail($id);
        $customers = Customer::all();
        $products = Product::all();
        return view('admin.reviews.edit', compact('review', 'customers', 'products'));
    }

    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);

        $data = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'product_id'  => 'required|exists:products,id',
            'content'     => 'nullable|string',
            'rating'      => 'required|integer|min:1|max:5',
        ]);

        $review->update($data);
        return redirect()->route('admin.reviews.index');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect()->route('admin.reviews.index')->with('success', 'Đánh giá đã được xóa.');
    }
    public function bin()
    {
        $reviews = Review::onlyTrashed()->get();
        return view('admin.reviews.bin', compact('reviews'));
    }
    public function restore($id)
    {
        $review = Review::withTrashed()->findOrFail($id);
        $review->restore();
        return redirect()->route('admin.reviews.index')->with('success', 'Khôi phục đánh giá thành công.');
    }
    public function forceDelete($id)
    {
        $review = Review::withTrashed()->findOrFail($id);
        $review->forceDelete();
        return redirect()->route('admin.reviews.index')->with('success', 'Xóa vĩnh viễn đánh giá thành công.');
    }
}
