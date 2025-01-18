<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\ColorRequest;
use App\Models\Color;
use Illuminate\Http\Request;

class AdminProductColorController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.products.colors.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ColorRequest $request)
    {
        $data = $request->validated();
        Color::create($data);
        return back()->with('success', 'the color added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $colors = Color::orderBy("id", "desc")->paginate(20);
        return view('admin.pages.products.colors.all', compact('colors'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Color $color)
    {
        return view('admin.pages.products.colors.edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ColorRequest $request, Color $color)
    {
        $data = $request->validated();
        $color->update($data);
        return back()->with('success', 'the color updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Color $color)
    {
        $color->delete();
        return back()->with('success', 'the color deleted successfully');
    }
}
