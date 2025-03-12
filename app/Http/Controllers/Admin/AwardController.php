<?php

namespace App\Http\Controllers\Admin;

use App\Models\Award;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AwardController extends Controller
{
    public function index()
    {
        $data['awards'] = Award::orderBy('order')->get();
        return view('admin.awards.index', $data);
    }

    public function create()
    {
        return view('admin.awards.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);


        $data = $request->except('image', '_token');
        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('uploads/awards', 'custom');
        }

        // Set order as the next highest order
        $data['order'] = Award::max('order') + 1;

        $i = Award::create($data);

        if ($i) {
            return redirect()->route('award.index')->with('success', 'Award has been saved successfully!');
        } else {
            return redirect()->route('award.create')
                ->with('error', 'Failed to save Award. Please try again.')
                ->withInput();
        }
    }

    public function edit(string $id)
    {
        $data['award'] = Award::find($id);
        return view('admin.awards.edit', $data);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $award = Award::find($id);
        $data = $request->except('image', '_token', '_method');
        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('uploads/awards', 'custom');

            if ($award->image && Storage::disk('custom')->exists($award->image)) {
                Storage::disk('custom')->delete($award->image);
            }
        }

        $i = $award->update($data);

        if ($i) {
            return redirect()->route('award.index')->with('success', 'Award has been updated!');
        } else {
            return redirect()->route('award.edit', $id)->with('error', 'Failed to update Award.');
        }
    }

    public function reorder(Request $request)
    {
        $newOrder = $request->newOrder;

        foreach ($newOrder as $item) {
            Award::where('id', $item['id'])->update(['order' => $item['order']]);
        }

        return response()->json(['success' => true]);
    }


    public function delete(string $id)
    {
        $award = Award::find($id);

        if ($award->image && Storage::disk('custom')->exists($award->image)) {
            Storage::disk('custom')->delete($award->image);
        }

        $award->delete();

        return redirect()->route('award.index')->with('success', 'Award has been deleted!');
    }
}
