<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $portfolios = Portfolio::query()
            ->when($search, function ($query, $search) {
                $query->where('title', 'like', "%{$search}%")
                      ->orWhere('content', 'like', "%{$search}%");
            })
            ->latest()
            ->get();

        return view('portfolios.index', compact('portfolios', 'search'));
    }

    public function create()
    {
        return view('portfolios.create');
    }

    public function store(Request $request)
{
    // Temporarily disable foreign key checks
    \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'media' => 'nullable|image|max:2048',
    ]);

    if ($request->hasFile('media')) {
        $validated['media_url'] = $request->file('media')->store('portfolios', 'public');
    }
    
    // Add a user_id (even if it doesn't exist)
    $validated['user_id'] = 1;

    Portfolio::create($validated);
    
    // Re-enable foreign key checks
    \DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    return redirect()->route('portfolios.index')->with('success', 'Portfolio created!');
}

    public function show(Portfolio $portfolio)
    {
        return view('portfolios.show', compact('portfolio'));
    }

    public function edit(Portfolio $portfolio)
    {
        return view('portfolios.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'media' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('media')) {
            if ($portfolio->media_url) {
                Storage::disk('public')->delete($portfolio->media_url);
            }
            $validated['media_url'] = $request->file('media')->store('portfolios', 'public');
        }

        $portfolio->update($validated);

        return redirect()->route('portfolios.index')->with('success', 'Portfolio updated!');
    }

    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->media_url) {
            Storage::disk('public')->delete($portfolio->media_url);
        }

        $portfolio->delete();

        return redirect()->route('portfolios.index')->with('success', 'Portfolio deleted!');
    }
}
