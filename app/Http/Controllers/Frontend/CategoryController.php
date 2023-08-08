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
            ->select('categories.*', 'categories.id', 'cities-categories.category_id')->where('cities-categories.city_id', '=', $id)->where('categories.type', '=', 0)->where('categories.parent_id', '=', NULL)
            ->paginate(12);


        return view('frontend.categories', compact('city', 'categories'));


    }


    public function detailplace($id)
    {
        $place = Place::find($id);

//        return $place;

        return view('frontend.detailplace', compact('place'));


    }

    public function subcategories($id)
    {
        $category = Category::with(['subcategories','places'])->find($id);

        if (!empty($category->subcategories) && $category->subcategories != null && count($category->subcategories) > 0) {


            $subcategories = Category::where('parent_id', '=', $id)->paginate(8);
            return view('frontend.subcategories', compact('category', 'subcategories'));


        }
        else {
          //  $places = $category->places;

          $places = Place::where('category_id',$id)->simplepaginate(5);



            return view('frontend.places', compact('category', 'places'));

        }


    }


}
