<?php

namespace App\Http\Controllers\Admin;

use App\Models\License;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class LicenseController extends Controller
{
    public function index()
    {
        $data['licenses'] = License::orderBy('order')->get();
        return view('admin.licenses.index', $data);
    }

    public function create()
    {
        return view('admin.licenses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $data = $request->except(['image', '_token']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads/licenses', 'custom');
        }

        // Set order as the next highest order
        $data['order'] = License::max('order') + 1;

        $i = License::create($data);

        if ($i) {
            return redirect()->route('license.index')->with('success', 'License has been saved successfully!');
        } else {
            return redirect()->route('license.create')
                ->with('error', 'Failed to save License. Please try again.')
                ->withInput();
        }
    }

    public function edit(string $id)
    {
        $license = License::findOrFail($id);
        return view('admin.licenses.edit', compact('license'));
    }

    public function update(Request $request, string $id)
    {
        $license = License::findOrFail($id);
        $data = $request->except(['image', '_token', '_method']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads/licenses', 'custom');

            if ($license->image && Storage::disk('custom')->exists($license->image)) {
                Storage::disk('custom')->delete($license->image);
            }
        }

        $i = $license->update($data);

        if ($i) {
            return redirect()->route('license.index')->with('success', 'License has been updated!');
        } else {
            return redirect()->route('license.edit', $id)->with('error', 'Failed to update License.');
        }
    }

    public function reorder(Request $request)
    {
        $newOrder = $request->newOrder;

        foreach ($newOrder as $item) {
            License::where('id', $item['id'])->update(['order' => $item['order']]);
        }

        return response()->json(['success' => true]);
    }



    public function delete(string $id)
    {
        $license = License::findOrFail($id);

        if ($license->image && Storage::disk('custom')->exists($license->image)) {
            Storage::disk('custom')->delete($license->image);
        }

        $license->delete();

        return redirect()->route('license.index')->with('success', 'License has been deleted!');
    }
}
