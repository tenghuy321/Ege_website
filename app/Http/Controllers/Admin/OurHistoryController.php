<?php

namespace App\Http\Controllers\Admin;

use App\Models\OurHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class OurHistoryController extends Controller
{
    public function index()
    {
        $data['ourhistories'] = OurHistory::get();
        return view('admin.ourhistories.index', $data);
    }

    public function create()
    {
        return view('admin.ourhistories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'year' => 'required',
            'month' => 'required',
            'description' => 'required',
        ]);

        $data = $request->except('_token', 'image');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads/ourhistory', 'custom');
        }

        $i = OurHistory::insert($data);

        if ($i) {
            return redirect()->route('history.index')->with('success', 'Our history has been saved successfully!');
        } else {
            return redirect()->route('history.create')
                ->with('error', 'Failed to save our history. Please try again.')
                ->withInput();
        }
    }


    public function edit(string $id)
    {
        $ourhistory = OurHistory::findOrFail($id);
        return view('admin.ourhistories.edit', compact('ourhistory'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'year' => 'required',
            'month' => 'required|string',
            'description' => 'required|string|max:500',
        ]);

        $ourhistory = OurHistory::findOrFail($id);

        $data = $request->except('_token', 'image', '_method');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads/ourhistory', 'custom');

            if ($ourhistory->image && Storage::disk('custom')->exists($ourhistory->image)) {
                Storage::disk('custom')->delete($ourhistory->image);
            }
        }

        $i = $ourhistory->update($data);

        if ($i) {
            return redirect()->route('history.index')->with('success', 'OurHistory has been updated!');
        } else {
            return redirect()->route('history.edit', $id)->with('error', 'Failed to update OurHistory.');
        }
    }


    public function delete(string $id)
    {
        $ourhistory = OurHistory::find($id);
        $i = OurHistory::where('id', $id)->delete();

        if ($ourhistory->image) {
            @unlink($ourhistory->image);
        }

        if ($i) {
            return redirect()->route('history.index');
        } else {
            return redirect()->back();
        }
    }
}
