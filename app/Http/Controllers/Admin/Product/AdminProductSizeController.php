<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\SizeRequest;
use App\Models\Size;
use Illuminate\Http\Request;

class AdminProductSizeController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.products.sizes.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SizeRequest $request)
    {
        $data = $request->validated();
        Size::create($data);
        return back()->with('success', 'the size added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $sizes = Size::paginate(20);
        return view('admin.pages.products.sizes.all', compact('sizes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Size $size)
    {
        return view('admin.pages.products.sizes.edit', compact('size'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SizeRequest $request, Size $size)
    {
        $data = $request->validated();
        $size->update($data);
        return back()->with('success', 'the size updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Size $size)
    {
        $size->delete();
        return back()->with('success', 'the size deleted successfully');
    }
}
