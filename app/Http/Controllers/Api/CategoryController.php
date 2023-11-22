<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\AqarCatageriesResource;
use App\Http\Resources\AqarDetailResource;
use App\Http\Resources\BransCarSubResource;
use App\Http\Resources\CarDetailResource;
use App\Http\Resources\CarResource;
use App\Http\Resources\AqarResource;
use App\Http\Resources\CityCategoryResource;
use App\Models\Aqar;
use App\Models\AqarReview;
use App\Models\Car;
use App\Models\City;
use App\Models\PlaceReview;
use App\Models\PlaceComment;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryOnlyResource;
use App\Http\Resources\CategoryYearsResource;
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

    public function listofBrands(Request $request)
    {


        if (!empty($request->page)) {

            $categories = Category::with('cars')->where('type', '=', 2)->where('parent_id', '=', 2)->whereHas('cars')->paginate('5');
            $categories = CategoryYearsResource::collection($categories)->response()->getData();
            return $this->respondSuccessPaginate($categories, __('message.categories retrieved successfully.'));


        } else {
            $categories = Category::with('cars')->where('type', '=', 2)->where('parent_id', '=', 2)->whereHas('cars')->get();
            $categories = CategoryYearsResource::collection($categories);
            return $this->respondSuccess($categories, __('message.categories retrieved successfully.'));

        }

//
//        else {
//            return $this->respondError(__('message.Category not found.'), ['error' => __('message.Category not found.')], 404);
//
//        }

    }

    public function listofCars(Request $request)
    {
        $category = Category::find($request->brand_id);


        if (count($category->subcategories)) {

            $categoriess = Category::with('carscategories')->where('parent_id', '=', $request->brand_id)->whereHas('carscategories')->get();


            $categories = BransCarSubResource::collection($categoriess);
            return $this->respondSuccess($categories, __('message.categories retrieved successfully.'));


        } else {
            return $this->respondErrorArray(__('message.Category not found.'), ['error' => __('message.Category not found.')], 200);

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
        $city_id = $request->city_id;
        $floor_number=$request->floor_number;

        $rule = [
            'sortBy' => Rule::in(['price','rate']),
            'sortOrder'=>Rule::in(['asc','desc']),

        ];
        $customMessages = [
            'sortBy' => __('The sort parameter accept only "price" or "rate" value'),
            'sortOrder' => __('The sort parameter accept only "asc" or "desc" value'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondErrorArray('Validation Error.', $validator->errors(), 400);

        } else {
        
        $aqar = Aqar::selectRaw('aqars.*, round(avg(aqar_reviews.rate)) as avgRating')->leftjoin('aqar_reviews','aqar_reviews.aqar_id','=','aqars.id')->where('category_id', '=', $request->category_id)->where('city_id', '=', $city_id)->groupBy('aqars.id')
        ->when($request->name, function ($query) use($request) {
            $query->where('name_ar', 'LIKE', '%'.trim($request->name).'%');
            
        })
        ->when($request->roomnubers, function ($query) use($request) {
            $query->where('total_rooms', '=', trim($request->roomnubers));
            
        })
        ->when($request->floor_number, function ($query) use($request,$floor_number) {
                
            $ids1=[];
             $floor_id=DB::select("select `id` from `aqar_details`  where parent_id=1 and name_ar=$floor_number");  
             $floor_id=$floor_id[0]->id;
             $aqars_id=DB::select("select `aqar_id` from `aqar_sections`  where sub_section_id=$floor_id;");
             foreach($aqars_id as $item){
                 array_push($ids1,$item->aqar_id);
             }
         
            $query->whereIn('aqars.id', $ids1);
            
        })

         ->when($request->min_price, function ($query) use($request) {
            $query->where('fixed_price', '>=', trim($request->min_price));
            
        })
        ->when($request->max_price, function ($query) use($request) {
            $query->where('fixed_price', '<=', trim($request->max_price));
            
        })
         ->when($request->rate, function ($query) use($request) {
            $query->having('avgRating',trim($request->rate));
            
        })
         ->when($request->price_asc, function ($query) use($request) {
            $query->orderBy('fixed_price','asc');
            
        })
        ->when($request->price_desc, function ($query) use($request) {
            $query->orderBy('fixed_price','desc');
            
        })
        ->when($request->rate_asc, function ($query) use($request) {
            $query->orderBy('avgRating1','asc');
            
        })
        ->when($request->rate_desc, function ($query) use($request) {
            $query->orderBy('avgRating','desc');
            
        })
       
        ->paginate(20);
        

        if (count($aqar)) {

            $aquarss = AqarResource::collection($aqar)->response()->getData();

            return $this->respondSuccessPaginate($aquarss, __('message.data retrieved successfully.'));

        } else {
            return $this->respondError(__('message.Data not found.'), ['error' => __('message.Data not found.')], 200);

        }
        }

    }

    public function listofCarswithsubcategory(Request $request)
    {
        $city_id = $request->city_id;
        $rule = [
            'sortBy' => Rule::in(['price','rate']),
            'sortOrder'=>Rule::in(['asc','desc']),

        ];
        $customMessages = [
            'sortBy' => __('The sort parameter accept only "price" or "rate" value'),
            'sortOrder' => __('The sort parameter accept only "asc" or "desc" value'),
        ];

        $validator = validator()->make($request->all(), $rule, $customMessages);

        if ($validator->fails()) {

            return $this->respondErrorArray('Validation Error.', $validator->errors(), 400);

        } else {

      //  $car = Car::where('sub_category_id', '=', $request->sub_category_id)->where('city_id', '=', $city_id)->paginate(20);


        $car = Car::selectRaw('cars.*, round(avg(car_reviews.rate)) as avgRating')->leftjoin('car_reviews','car_reviews.car_id','=','cars.id')->where('sub_category_id', '=', $request->sub_category_id)->where('city_id', '=', $city_id)->groupBy('cars.id')
       
         ->when($request->name, function ($query) use($request) {
            $query->where('name_ar', 'LIKE', '%'.trim($request->name).'%');
            
        })
        ->when($request->year, function ($query) use($request) {
            $query->where('year', '=', trim($request->year));
            
        })
         ->when($request->min_price, function ($query) use($request) {
            $query->where('fixed_price', '>=', trim($request->min_price));
            
        })
        ->when($request->max_price, function ($query) use($request) {
            $query->where('fixed_price', '<=', trim($request->max_price));
            
        })
         ->when($request->rate, function ($query) use($request) {
            $query->having('avgRating',trim($request->rate));
            
        })
        ->when($request->price_asc, function ($query) use($request) {
            $query->orderBy('fixed_price','asc');
            
        })
        ->when($request->price_desc, function ($query) use($request) {
            $query->orderBy('fixed_price','desc');
            
        })
        ->when($request->rate_asc, function ($query) use($request) {
            $query->orderBy('avgRating','asc');
            
        })
        ->when($request->rate_desc, function ($query) use($request) {
            $query->orderBy('avgRating','desc');
            
        })
       
        ->paginate(20);


        if (count($car)) {

            $carss = CarResource::collection($car)->response()->getData();

            return $this->respondSuccessPaginate($carss, __('message.data retrieved successfully.'));

        } else {
            return $this->respondErrorArray(__('message.Data not found.'), ['error' => __('message.Data not found.')], 200);

        }
        }

    }

    public function CityListCategories(Request $request)
    {
        $city_id = $request->city_id;
        // $categories = [];
        // foreach (Category::where('type', '=', 0)->where('parent_id', null)->where('id', '!=', 1)->where('id', '!=', 2)->get() as $cat) {

        //     $city = json_decode($cat->city_id);

        //     if (in_array($city_id, $city)) {
        //         array_push($categories, $cat);

        //     }
        // }
        $categories=Category::join('cities-categories', 'categories.id', '=', 'cities-categories.category_id')->where('categories.type', '=', 0)->where('categories.parent_id', null)->where('categories.id', '!=', 1)->where('categories.id', '!=', 2)->where('cities-categories.city_id',$request->city_id)->get();

        if (count($categories)) {

            $categories = CategoryOnlyResource::collection($categories);
            return $this->respondSuccess($categories, __('message.categories retrieved successfully.'));

        } else {
            
            return $this->respondErrorArray(__('message.Category not found.'), ['error' => __('message.Category not found.')], 200);

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


        // if (!empty($request->rate)) {
        //     $places_id = PlaceReview::orderBy('rate', 'DESC')->pluck('place_id')->toArray();


        //     $placess = Place::where(function ($query) use ($cat_id) {
        //         $query->where('category_id', $cat_id)->orwhere('sub_category_id', $cat_id);
        //     })->where('city_id', '=', $city_id)->whereIn('id', $places_id)->paginate(20);

        // } else {

        //     $placess = Place::where(function ($query) use ($cat_id) {
        //         $query->where('category_id', $cat_id)->orwhere('sub_category_id', $cat_id);
        //     })->where('city_id', '=', $city_id)->paginate(20);
        // }
        
        $rate=$request->rate;
        $place_table=$request->place_table;
        $placess = Place::selectRaw('places.*, round(avg(place_reviews.rate)) as avgRating')->leftjoin('place_reviews','place_reviews.place_id','=','places.id')
        ->where(function ($query) use ($cat_id) {
                 $query->where('category_id', $cat_id)->orwhere('sub_category_id', $cat_id);
             })->where('city_id', '=', $city_id)->groupBy('places.id')
             ->when($request->name, function ($query) use($request) {
                $query->where('name_ar', 'LIKE','%'.trim($request->name).'%');
                
            })
            ->when($request->rate, function ($query) use($request,$rate) {
                
                $ids=[];
                 $places_id=DB::select("select `place_id`from `place_reviews`   GROUP BY place_id HAVING round(avg(rate))=$rate;");
                 foreach($places_id as $item){
                     array_push($ids,$item->place_id);
                 }
             
                $query->whereIn('places.id', $ids);
                
            })
            ->when($request->place_table, function ($query) use($request,$place_table) {
                
                $ids1=[];
                 $places_id=DB::select("select `place_id`from `place_tables`  where id=$place_table;");
                 foreach($places_id as $item){
                     array_push($ids1,$item->place_id);
                 }
             
                $query->whereIn('places.id', $ids1);
                
            })
            ->when($request->rate_asc, function ($query) use($request) {
                $query->orderBy('avgRating','asc');
                
            })
            ->when($request->rate_desc, function ($query) use($request) {
                $query->orderBy('avgRating','desc');
                
            })
       
        ->paginate(20);



        if (count($subcategories) == 0) {
            $places = PlaceResource::collection($placess)->response()->getData();

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
