<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OurProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::paginate(5);
        $projects->getCollection()->transform(function ($item, $index) use ($projects) {
            // Calculate the auto number based on the current page
            $item->auto_number = $index + 1 + ($projects->currentPage() - 1) * $projects->perPage();
            return $item;
        });
        return view('admin.projects.index', compact('projects'));

    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'project_name' => 'required',
            'scope_of_work' => 'required',
        ]);

        $data = $request->except('_token', 'image');

        $data['impact'] = json_encode($request->impact ?? []);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('uploads/projects', 'custom');
        }

        $i = Project::insert($data);

        if ($i) {
            return redirect()->route('project.index')->with('success', 'Our Project has been saved successfully!');
        } else {
            return redirect()->route('project.create')
                ->with('error', 'Failed to save our Project. Please try again.')
                ->withInput();
        }
    }

    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'project_name' => 'required',
            'scope_of_work' => 'required',
        ]);

        $product = Project::findOrFail($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Record not found!');
        }

        $data = $request->except(['image','_token', '_method']);

        // Handle the file upload for `image`
        if ($request->image) {
            if ($product->image) {
                @unlink($product->image);
            }
            $data['image'] = $request->file('image')->store('uploads/projects', 'custom');
        }

        $data['impact'] = json_encode($request->impact ?? []);

        // Insert the data into the database
        $i = Project::where('id', $id)->update($data);

        if ($i) {
            return redirect()->route('project.index')->with('success', 'Project has been updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Failed to update Project!');
        }

    }

    public function delete(string $id)
    {
        $project = Project::findOrFail($id);
        $i = Project::where('id', $id)->delete();

        if ($project->image) {
            @unlink($project->image);
        }

        if ($i) {
            return redirect()->route('project.index');
        } else {
            return redirect()->back();
        }
    }
}
