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
       $data['licenses'] = License::get();
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

        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('uploads/licenses', 'custom');
        }

        $i = License::insert($data);

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
        $license = License::find($id);
        return view('admin.licenses.edit', compact('license'));
    }

    public function update(Request $request, string $id)
    {
        $license = License::find($id);
        $data = $request->except(['image', '_token', 'method']);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads/ourhistory', 'custom');

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

    public function delete(string $id)
    {
        $license = License::find($id);
        $i = License::where('id', $id)->delete();

        if ($license->image) {
            @unlink($license->image);
        }

        if ($i) {
            return redirect()->route('license.index');
        } else {
            return redirect()->back();
        }
    }
}
