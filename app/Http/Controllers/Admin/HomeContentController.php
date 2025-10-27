<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeContent;
use Illuminate\Support\Facades\Storage;

class HomeContentController extends Controller
{
    // Apply auth middleware in route group or controller constructor
    public function __construct()
    {
        $this->middleware('auth'); // or your admin guard
    }

    public function index()
    {
        $contents = HomeContent::orderBy('key')->paginate(20);
        return view('admin.home_contents.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.home_contents.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'key' => 'required|string|max:100|unique:home_contents,key',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:4096',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('home_contents', 'public');
        }

        HomeContent::create($data);

        return redirect()->route('admin.home_contents.index')->with('success', 'Content saved.');
    }

    public function edit($id)
    {
        $content = HomeContent::findOrFail($id);
        return view('admin.home_contents.edit', compact('content'));
    }

    public function update(Request $request, $id)
    {
        $content = HomeContent::findOrFail($id);

        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:4096',
        ]);

        if ($request->hasFile('image')) {
            if ($content->image && Storage::disk('public')->exists($content->image)) {
                Storage::disk('public')->delete($content->image);
            }
            $data['image'] = $request->file('image')->store('home_contents', 'public');
        }

        $content->update($data);

        return redirect()->route('admin.home_contents.index')->with('success', 'Content updated.');
    }

    public function destroy($id)
    {
        $content = HomeContent::findOrFail($id);
        if ($content->image && Storage::disk('public')->exists($content->image)) {
            Storage::disk('public')->delete($content->image);
        }
        $content->delete();

        return redirect()->route('admin.home_contents.index')->with('success', 'Content removed.');
    }
}
