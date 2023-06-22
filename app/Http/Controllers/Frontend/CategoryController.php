<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use App\Models\Contact;
use App\Models\Place;
use App\Models\Setting;
use Illuminate\Http\Request;


class CategoryController extends Controller
{

    public function categories($id)
    {
        $city = City::find($id);
//        $categories = $city->categoriesTotal;

        $categories = Category::join('cities-categories', 'cities-categories.category_id', '=', 'categories.id')
            ->select('categories.*', 'categories.id', 'cities-categories.category_id')->where('cities-categories.city_id', '=', $id)
            ->paginate(8);


        return view('frontend.categories', compact('city', 'categories'));


    }


    public function detailplace($id)
    {
        $place = Place::find($id);

        return view('frontend.detailplace', compact('place'));


    }

    public function subcategories($id)
    {
        $category = Category::find($id);


        if (!empty($category->subcategories) && $category->subcategories != null) {


            $subcategories = Category::where('parent_id', '=', $id)->paginate(8);
            return view('frontend.subcategories', compact('category', 'subcategories'));


        } elseif (!empty($category->places)) {

            $places = $category->places;
            return view('frontend.places', compact('category', 'places'));

        }


    }


}
