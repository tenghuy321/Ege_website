<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class OurProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::get();
        return view('admin.products.index', $data);
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'details' => 'required'
        ]);

        $data = $request->except('_token', 'image');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads/ourproduct', 'custom');
        }

        $i = Product::insert($data);

        if ($i) {
            return redirect()->route('ourpruduct.index')->with('success', 'Our Our Pruduct has been saved successfully!');
        } else {
            return redirect()->route('ourpruduct.create')
                ->with('error', 'Failed to save our Our Pruduct. Please try again.')
                ->withInput();
        }
    }

    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
