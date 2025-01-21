<?php

namespace App\Http\Controllers\Admin\Shepping\City;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Shepping\City\CityRequest;
use App\Models\City;
use Illuminate\Http\Request;

class AdminSheppingCityController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.pages.shepping.city.add");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CityRequest $request)
    {
        $data = $request->validated();
        City::create($data);
        return back()->with("success", "the city added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $cities = City::orderBy("id", "desc")->paginate(10);
        // dd($cities);
        return view("admin.pages.shepping.city.all" , compact("cities"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        return view('admin.pages.shepping.city.edit', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CityRequest $request, City $city)
    {
        $data = $request->validated();
        $city->update($data);

        /*==
        ** this way for redirect to route with slug **
        ==*/
        return to_route("edit.city", $city)->with("success", "category updated successfully");

        // return back()->with("success", "the city updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        $city->delete();
        return back()->with("success", "the city deleted successfully");
    }
}
