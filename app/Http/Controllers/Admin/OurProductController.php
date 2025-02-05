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
            'product_name' => 'required',
            // 'key_specifications' => 'required|array',
            'key_specifications.*.body' => 'required|string',
            // 'benefits' => 'required|array',
            'benefits.*.body' => 'required|string',
            // 'use_cases' => 'required|array',
            'use_cases.*.body' => 'required|string',
        ]);

        $data = $request->except('_token');

        // Ensure JSON fields default to empty array if not provided
        $data['key_specifications'] = json_encode($request->key_specifications ?? []);
        $data['benefits'] = json_encode($request->benefits ?? []);
        $data['use_cases'] = json_encode($request->use_cases ?? []);

        // Handle File Upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads/ourproduct', 'custom');
        }

        $i = Product::insert($data);
        if ($i) {
            return redirect()->route('ourproduct.index')->with('success', 'Product has been saved successfully!');
        } else {
            return redirect()->route('ourproduct.create')
                ->with('error', 'Failed to save product. Please try again.')
                ->withInput();
        }
    }


    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'product_name' => 'required',
            // 'key_specifications' => 'required|array',
            'key_specifications.*.body' => 'required|string',
            // 'benefits' => 'required|array',
            'benefits.*.body' => 'required|string',
            // 'use_cases' => 'required|array',
            'use_cases.*.body' => 'required|string',
        ]);

        $product = Product::findOrFail($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Record not found!');
        }

        $data = $request->except(['image','_token', '_method']);

        // Handle the file upload for `image`
        if ($request->image) {
            if ($product->image) {
                @unlink($product->image);
            }
            $data['image'] = $request->file('image')->store('uploads/ourproduct', 'custom');
        }

        $data['key_specifications'] = json_encode($request->key_specifications ?? []);
        $data['benefits'] = json_encode($request->benefits ?? []);
        $data['use_cases'] = json_encode($request->use_cases ?? []);
        // Insert the data into the database
        $i = Product::where('id', $id)->update($data);

        if ($i) {
            return redirect()->route('ourproduct.index')->with('success', 'Update successfully.');
        } else {
            return redirect()->back()->with('error', 'Data is already existed!');
        }
    }

    public function delete(string $id)
    {
        $ourproduct = Product::findOrFail($id);
        $i = Product::where('id', $id)->delete();

        if ($ourproduct->image) {
            @unlink($ourproduct->image);
        }

        if ($i) {
            return redirect()->route('ourproduct.index');
        } else {
            return redirect()->back();
        }
    }
}
