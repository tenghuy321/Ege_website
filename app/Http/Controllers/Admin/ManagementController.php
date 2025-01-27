<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Management;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function index()
    {
        $data['managements'] = Management::get();
        return view('admin.managements.index', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(string $id)
    {
        $management = Management::findOrFail($id);
        return view('admin.managements.edit', compact('management'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'description' => 'required|string|max:2000',
        ]);

        $management = Management::findOrFail($id);

        $data = $request->except('_token', '_method');

        $i = $management->update($data);

        if ($i) {
            return redirect()->route('management.index')->with('success', 'Our Management Team has been updated!');
        } else {
            return redirect()->route('management.edit', $id)->with('error', 'Failed to update Our Management Team.');
        }
    }

}
