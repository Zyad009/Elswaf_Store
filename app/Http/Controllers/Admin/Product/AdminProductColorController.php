<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\ColorRequest;
use App\Models\Color;
use Illuminate\Http\Request;

class AdminProductColorController extends Controller
{
    private const DIR_VIEW = "admin.pages.products.colors";

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
    public function store(ColorRequest $request)
    {
        $data = $request->validated();
        Color::create($data);
        alert()->success("Success!", "Created has been successfully");

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $colors = Color::orderBy("id", "desc")
        ->paginate(config("pagination.count"));
        return view(SELF::DIR_VIEW . '.all', compact('colors'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Color $color)
    {
        return view(SELF::DIR_VIEW . '.edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ColorRequest $request, Color $color)
    {
        $data = $request->validated();
        $color->update($data);
        alert()->success("Success!", "colour updated successfully");

        return to_route("admin-dashboard.color.all", $color);

        // return back()->with('success', 'the color updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Color $color)
    {
        $color->delete();
        alert()->success("Deleted", "deleted has been successfully");

        return back();
    }
}
