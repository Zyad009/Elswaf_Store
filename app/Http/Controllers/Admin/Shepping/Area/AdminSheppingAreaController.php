<?php

namespace App\Http\Controllers\Admin\Shepping\Area;

use App\Models\Area;
use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Shepping\Area\AreaRequest;

class AdminSheppingAreaController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::select("id", "name")->get();

        return view("admin.pages.shepping.area.index" , compact("cities"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::with("areas")->select("id", "name")->get();
        return view("admin.pages.shepping.area.add" , compact("cities")); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AreaRequest $request)
    {
        $data = $request->validated();
        Area::create($data);
        return back()->with("success", "the area added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        $areas = $city->areas()->orderBy("id", "desc")->paginate(25);
        return view("admin.pages.shepping.area.all" , compact("areas" , "city"));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        $cities = City::select("id" , "name")->get();
        return view("admin.pages.shepping.area.edit" , compact("area" , "cities"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AreaRequest $request , Area $area )
    {
        $data = $request->validated();
        $area->update($data);
        return back()->with("success" , "data updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        $area->delete();
        return back()->with("success" , "data deleted successfully");
    }
}
