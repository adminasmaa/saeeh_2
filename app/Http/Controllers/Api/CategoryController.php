<?php

namespace App\Http\Controllers\Api;

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
        $categories =CategoryOnlyResource::collection(Category::where('city_id',$city_id)->get());
        if (is_null($categories)) {
            return $this->respondError(__('message.Category not found.'),['error'=>__('Category not found.')],404);
        }

        return $this->respondSuccess($categories,__('message.categories retrieved successfully.'));
    }

    public function subcategories($cat_id)
    {

        $subcategories = SubCategoryResource::collection(Category::where('parent_id',$cat_id)->get());


        if (count($subcategories)==0) {
            $places=PlaceResource::collection(Place::where('category_id',$cat_id)->get());
            return $this->respondSuccess($places, __('message.subcategories retrieved successfully.'));
        }
        else{
            return $this->respondSuccess($subcategories, __('message.subcategories retrieved successfully.'));
        }


    }

    public function categorydetail($category_id)
    {
        $categoryDetail = new CategoryResource(Category::where('id',$category_id)->with('subcategories')->first());

//        return $categoryDetail;
//
//        if ($categoryDetail==null) {
//            return $this->respondError(__('message.category not found.'),['error'=>__('category not found.')],404);
//        }

        return $this->respondSuccess($categoryDetail, __('message.category retrieved successfully.'));
    }
}
