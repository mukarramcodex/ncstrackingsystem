<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index (Request $request)
    {
        $query = Branch::query();

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $branches = Branch::orderBy('created_at', 'desc')->get();
        return view('branch.index', compact('branches'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:branches,email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'status' => 'required|in:active,inactive',
        ]);

        Branch::create($validated);
        return redirect()->route('branches.index')->with('success', 'Branch added successfully!');
    }

    public function edit(Branch $branch)
    {
        return view('branch.edit', compact('branch'));
    }

    public function update(Request $request, Branch $branch)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:branches,email,' . $branch->id,
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'status' => 'required|in:active,inactive',
        ]);

        $branch->update($validated);

        return redirect()->route('branches.index')->with('success', 'Branch updated successfully!');
    }


    public function destroy(Branch $branch)
    {
    $branch->delete();
    return redirect()->route('branches.index')->with('success', 'Branch deleted successfully!');
    }
}
