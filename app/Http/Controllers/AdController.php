<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Province;
use App\City;
use App\Category;

class AdController extends Controller
{
    public function index()
    {
        $provinces = Province::all();
        $categories = Category::all();

        return view('ads.create', compact('provinces', 'categories'));
    }

    public function getCityOptions(Request $request)
    {
        extract($request->only('province_id'));

        $province = Province::find($province_id);
        $cities = $province->cities;

        return view('ads.partials.city_options', compact('cities'));
    }

    public function getCityInput(Request $request)
    {
        extract($request->only('city_id'));

        $city = City::find($city_id);
        $cities = $city->name;

        return view('ads.partials.city_input', compact('cities'));
    }
}
