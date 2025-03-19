<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\SizeRequest;
use App\Models\Size;
use Illuminate\Http\Request;

class AdminProductSizeController extends Controller
{
    private const DIR_VIEW = "admin.pages.products.sizes";

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(SELF::DIR_VIEW . '.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SizeRequest $request)
    {
        $data = $request->validated();
        Size::create($data);
        alert()->success("Success!", "Created has been successfully");

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $sizes = Size::orderBy("type_size", "desc")
        ->paginate(config("pagination.count"));
        return view(SELF::DIR_VIEW . '.all', compact('sizes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Size $size)
    {
        return view(SELF::DIR_VIEW . '.edit', compact('size'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SizeRequest $request, Size $size)
    {
        $data = $request->validated();
        $size->update($data);
        alert()->success("Success!", "size updated successfully");

        return to_route("admin-dashboard.size.all");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Size $size)
    {
        $size->delete();
        alert()->success("Deleted", "deleted has been successfully");

        return back();
    }
}
