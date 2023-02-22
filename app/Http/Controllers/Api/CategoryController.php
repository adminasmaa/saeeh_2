<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\SubCategoryResource;
use App\Models\Category;
use App\Models\Place;


class CategoryController extends Controller
{


    public function categories($city_id)
    {
        $categories = Category::where('city_id',$city_id)->get(['id','name','city_id','icon','image','description'])->map(function($category){
            $category->image = asset('images/categories')."/".$category->image;
            return $category;
        });
        if (is_null($categories)) {
            return $this->respondError(404,__('message.Category not found.'),['error'=>__('Category not found.')]);
        }

        return $this->respondSuccess(200,__('message.categories retrieved successfully.'),$categories);
    }

    public function subcategories($cat_id)
    {

        $subcategories = SubCategoryResource::collection(Category::where('parent_id',$cat_id)->get());

        if (count($subcategories)==0) {
            $places=Place::where('category_id',$cat_id)->get();
            return $this->respondSuccess(200, __('message.subcategories retrieved successfully.'), $places);
        }
        else{
            return $this->respondSuccess(200, __('message.subcategories retrieved successfully.'),$subcategories);
        }


    }

    public function categorydetail($category_id)
    {
        $categoryDetail = CategoryResource::collection(Category::where('id',$category_id)->with('subcategories')->get());

//        return $categoryDetail;

        if (count($categoryDetail)==0) {
            return $this->respondError(404,__('message.category not found.'),['error'=>__('category not found.')]);
        }

        return $this->respondSuccess(200, __('message.category retrieved successfully.'),$categoryDetail);
    }
}
