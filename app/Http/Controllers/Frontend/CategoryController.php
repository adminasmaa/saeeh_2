<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use App\Models\Contact;
use App\Models\Place;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{



    public function allcommentPlace($id){

       $user=Auth::user();

       $place=Place::find($id);



//       return $place->placeCommentsAll;




        return view('frontend.commentplace', compact('user','place'));
    }

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

    public function subcategories($id,$city_id)
    {
        $city_id=$city_id ?? 0;
        $category = Category::with(['subcategories','places'])->find($id);

        if (!empty($category->subcategories) && $category->subcategories != null && count($category->subcategories) > 0) {

            if($city_id){
            $subcategories = Category::join('cities-categories', 'categories.id', '=', 'cities-categories.category_id')->where('cities-categories.city_id','=',$city_id)->where('categories.parent_id', '=', $id)->select('categories.*')->paginate(12);
            }else{
            $subcategories = Category::where('categories.parent_id', '=', $id)->paginate(12);
            }
            return view('frontend.subcategories', compact('category', 'subcategories','city_id'));


        }
        else {
          //  $places = $category->places;
          if($city_id){

            $places = Place::where(function ($query) use ($id) {$query->where('category_id', $id)->orwhere('sub_category_id',$id);})->where('city_id','=', $city_id)->paginate(12);

          }else{

          $places = Place::where(function ($query) use ($id) {$query->where('category_id', $id)->orwhere('sub_category_id',$id);})->paginate(12);

          }

            return view('frontend.places', compact('category', 'places','city_id'));

        }


    }


}
