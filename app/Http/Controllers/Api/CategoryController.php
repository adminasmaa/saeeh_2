<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Collection;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryOnlyResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PlaceResource;
use App\Http\Resources\SubCategoryResource;
use App\Models\Category;
use App\Models\Place;


class CategoryController extends Controller
{


    public function categories($city_id)
    {

        $categories = [];
        foreach (Category::get() as $cat) {

            $city = json_decode($cat->city_id);

            if (in_array($city_id, $city)) {
                array_push($categories, $cat);

            }
        }

        if (count($categories)) {
            $categories = CategoryOnlyResource::collection($categories);
            return $this->respondSuccess($categories, __('message.categories retrieved successfully.'));

        }else{
            return $this->respondError(__('message.Category not found.'), ['error' => __('Category not found.')], 404);

        }



    }

    public function subcategories($cat_id)
    {

        $subcategories = SubCategoryResource::collection(Category::where('parent_id', $cat_id)->get());


        if (count($subcategories) == 0) {
            $places = PlaceResource::collection(Place::where('category_id', $cat_id)->get());
            return $this->respondSuccess($places, __('message.subcategories retrieved successfully.'));
        } else {
            return $this->respondSuccess($subcategories, __('message.subcategories retrieved successfully.'));
        }


    }

    public function categorydetail($category_id)
    {
        $category = Category::where('id', $category_id)->with('subcategories')->first();
        if (isset($category)) {


            $categoryDetail = new CategoryResource($category);


            return $this->respondSuccess($categoryDetail, __('message.category retrieved successfully.'));
        } else {
            return $this->respondError(__('message.category not found.'), ['error' => __('category not found.')], 404);


        }
    }
}