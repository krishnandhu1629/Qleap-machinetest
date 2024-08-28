<?php

namespace App\Http\Controllers;

use App\Models\estimate;
use Illuminate\Http\Request;

class estimateController extends Controller
{
    public function index()
    {
        $estimates = estimate::all();
        return view('estimates.index', compact('estimates'));
    }

    public function create()
    {
        return view('estimates.create');
    }

    public function store(Request $request)
    {
        estimate::create($request->all());
        return redirect()->route('estimates.index');
    }

    public function show(estimate $estimate)
    {
        return view('estimates.show', compact('estimate'));
    }

    public function edit(estimate $estimate)
    {
        return view('estimates.edit', compact('estimate'));
    }

    public function update(Request $request, estimate $estimate)
    {
        $estimate->update($request->all());
        return redirect()->route('estimates.index');
    }

    public function destroy(estimate $estimate)
    {
        $estimate->delete();
        return redirect()->route('estimates.index');
    }
}

