<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\AqarCatageriesResource;
use App\Http\Resources\AqarDetailResource;
use App\Http\Resources\BransCarSubResource;
use App\Http\Resources\CarResource;
use App\Http\Resources\CityCategoryResource;
use App\Models\Aqar;
use App\Models\AqarReview;
use App\Models\Car;
use App\Models\City;
use Illuminate\Http\Request;
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


    public function citydetails(Request $request)
    {

        $city_id = $request->city_id;

        $city = City::find($city_id);

//        return $city;
//        $categories = $city->categoriesTotal;
//        foreach (Category::where('type', '=', 0)->where('parent_id', null)->where('id','!=',1)->where('id','!=',2)->get() as $cat) {
//
//            $city = json_decode($cat->city_id);
//
//            if (in_array($city_id, $city)) {
//                array_push($categories, $cat);
//
//            }
//        }

        if (isset($city)) {
            $cities = City::find($request->city_id);
            $categories = new CityCategoryResource($cities);

            return $this->respondSuccess($categories, __('message.categories retrieved successfully.'));

        } else {
            return $this->respondError(__('message.Category not found.'), ['error' => __('message.Category not found.')], 404);

        }


    }

    public function listofBrands()
    {
        $categories = Category::where('type', '=', 2)->get();

        if (count($categories)) {


            $categories = CategoryOnlyResource::collection($categories);
            return $this->respondSuccess($categories, __('message.categories retrieved successfully.'));

        } else {
            return $this->respondError(__('message.Category not found.'), ['error' => __('message.Category not found.')], 404);

        }

    }

    public function listofCars(Request $request)
    {
        $category = Category::find($request->brand_id);


        if (count($category->subcategories)) {


            $categories = BransCarSubResource
                ::collection($category->subcategories);
            return $this->respondSuccess($categories, __('message.categories retrieved successfully.'));

        } else {
            return $this->respondError(__('message.Category not found.'), ['error' => __('message.Category not found.')], 404);

        }

    }

    public function listofCategories()
    {
        $categoriess = Category::where('type', '=', 1)->where('parent_id', '=', 1)->get();


        if (count($categoriess)) {


            $categories = AqarCatageriesResource::collection($categoriess);
            return $this->respondSuccess($categories, __('message.categories retrieved successfully.'));

        } else {
            return $this->respondError(__('message.Category not found.'), ['error' => __('message.Category not found.')], 404);

        }

    }

    public function listofAquarWithCategory(Request $request)
    {
        if (!empty($request->rate) && !empty($request->low_price)) {

            $aqars_id = AqarReview::orderBy('fixed_price', 'DESC')->pluck('aqar_id');
            $aquars = Aqar::where('category_id', '=', $request->category_id)->whereIn('id', $aqars_id)->orderBy('fixed_price', 'ASC')->paginate(20);


        } elseif (!empty($request->rate) && !empty($request->hign_price)) {

            $aqars_id = AqarReview::orderBy('fixed_price', 'DESC')->pluck('aqar_id');
            $aquars = Aqar::where('category_id', '=', $request->category_id)->whereIn('id', $aqars_id)->orderBy('fixed_price', 'DESC')->paginate(20);


        } elseif (!empty($request->low_price)) {

            $aquars = Aqar::where('category_id', '=', $request->category_id)->orderBy('fixed_price', 'ASC')->paginate(20);

        } elseif (!empty($request->hign_price)) {
            $aquars = Aqar::where('category_id', '=', $request->category_id)->orderBy('fixed_price', 'DESC')->paginate(20);


        } elseif (!empty($request->rate)) {
            $aqars_id = AqarReview::orderBy('fixed_price', 'DESC')->pluck('aqar_id');
            $aquars = Aqar::where('category_id', '=', $request->category_id)->whereIn('id', $aqars_id)->orderBy('fixed_price', 'ASC')->paginate(20);


        } else {

            $aquars = Aqar::where('category_id', '=', $request->category_id)->paginate(20);

        }


        if (count($aquars)) {

            $aquarss = AqarDetailResource::collection($aquars)->response()->getData();

            return $this->respondSuccessPaginate($aquarss, __('message.data retrieved successfully.'));

        } else {
            return $this->respondError(__('message.Data not found.'), ['error' => __('message.Data not found.')], 404);

        }

    }

    public function listofCarswithsubcategory(Request $request)
    {
        $cars = Car::where('sub_category_id', '=', $request->sub_category_id)->paginate(20);


        if (count($cars)) {

            $carss = CarResource::collection($cars)->response()->getData();

            return $this->respondSuccessPaginate($carss, __('message.data retrieved successfully.'));

        } else {
            return $this->respondError(__('message.Data not found.'), ['error' => __('message.Data not found.')], 404);

        }

    }

    public function CityListCategories(Request $request)
    {
        $city_id = $request->city_id;
        $categories = [];
        foreach (Category::where('type', '=', 0)->where('parent_id', null)->where('id', '!=', 1)->where('id', '!=', 2)->get() as $cat) {

            $city = json_decode($cat->city_id);

            if (in_array($city_id, $city)) {
                array_push($categories, $cat);

            }
        }

        if (count($categories)) {


            $categories = CategoryOnlyResource::collection($categories);
            return $this->respondSuccess($categories, __('message.categories retrieved successfully.'));

        } else {
            return $this->respondError(__('message.Category not found.'), ['error' => __('message.Category not found.')], 404);

        }

    }

    public function subcategories(Request $request)
    {
        $cat_id = $request->category_id;

        $subcategories = SubCategoryResource::collection(Category::where('parent_id', $cat_id)->get());


        if (count($subcategories) == 0) {
            $places = PlaceResource::collection(Place::where('category_id', $cat_id)->get());
            return $this->respondSuccess($places, __('message.subcategories retrieved successfully.'));
        } else {
            return $this->respondSuccess($subcategories, __('message.subcategories retrieved successfully.'));
        }


    }

    public function placessubcategory(Request $request)
    {
        $cat_id = $request->category_id;
        $city_id = $request->city_id;

        $subcategories = SubCategoryResource::collection(Category::where('parent_id', $cat_id)->get());


        if (count($subcategories) == 0) {
            $places = PlaceResource::collection(Place::where(function ($query) use ($cat_id) {
                $query->where('category_id', $cat_id)->orwhere('sub_category_id', $cat_id);
            })->where('city_id', '=', $city_id)->paginate(20))->response()->getData();
//            $places = Place::where('category_id','=', $cat_id)->orwhere('sub_category_id','=', $cat_id)->paginate(20);

            return $this->respondSuccessPaginate($places, __('message.subcategories retrieved successfully.'));
        } else {
            return $this->respondSuccess($subcategories, __('message.subcategories retrieved successfully.'));
        }


    }

    public function categorydetail(Request $request)
    {
        $category_id = $request->category_id;
        $city_id = $request->city_id;

        $category = Category::where('id', $category_id)->with('subcategories', function ($q) use ($city_id) {
            $q->select('categories.*')->join('cities-categories', 'categories.id', '=', 'cities-categories.category_id')->where('cities-categories.city_id', '=', $city_id);
        })->first();
        if (isset($category)) {


            $categoryDetail = new CategoryResource($category);


            return $this->respondSuccess($categoryDetail, __('message.category retrieved successfully.'));
        } else {
            return $this->respondError(__('message.Category not found.'), ['error' => __('message.Category not found.')], 404);


        }
    }
}
