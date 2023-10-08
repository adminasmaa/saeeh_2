<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Place;    // HasMany
use App\Models\Car;    // HasMany
use App\Models\Aqar;   //belongsTo
use DB;
class Category extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name_ar',
        'name_en',
        'active',
        'description',
        'image',
        'icon',
        'parent_id',
        'type',
        'city_id'
    ];

    protected $hidden=['deleted_at','updated_at'];

    public function getNameAttribute()
    {
        return (app()->getLocale() === 'ar') ? $this->name_ar : $this->name_en;
    }
    // relations
    public function places(){
        return $this->HasMany(Place::class,'sub_category_id');
    }
    // relations
    public function cars(){
        return $this->HasMany(Car::class,'category_id');
    }
    public function subcategories(){
        return $this->HasMany(Category::class,'parent_id');
    }  public function subcategoriesWithCars(){
        return $this->HasMany(Category::class,'parent_id')->whereHas('cars');
    }
    // relations
    public function aqar(){
        return $this->belongsTo(Aqar::class,'aqar_id');
    }

    public function aqars(){
        return $this->HasMany(Aqar::class,'category_id');
    }

    public function carscategories(){

        return $this->HasMany(Car::class,'sub_category_id');
    }

    // public function roomnumbers($id)
    // {

    //     $roomnumbers = DB::select("SELECT   DISTINCT sum(aqar_details.name_ar) as roomnumbers
    //     FROM `aqars`
    //     INNER JOIN aqar_sections on aqars.id=aqar_sections.aqar_id
    //     INNER JOIN aqar_details on aqar_details.id=aqar_sections.sub_section_id
    //     WHERE aqars.category_id=$id and (aqar_sections.section_id=6 or aqar_sections.section_id=18) group by aqars.id  ORDER BY sum(aqar_details.name_ar);");
    //     $arr=[];
    //     foreach($roomnumbers as $number){

    //         array_push($arr, $number->roomnumbers);
    //     }
    //     return $arr;



    // }

    public function roomnumbers($cat_id)
     {
        $roomnumbers = DB::select("SELECT   DISTINCT aqars.total_rooms  as roomnumbers from aqars  WHERE aqars.category_id=$cat_id order by total_rooms;");
        $arr=[];
        foreach($roomnumbers as $number){

            array_push($arr, $number->roomnumbers);
        }
        return $arr;

     }

    public function floornumbers($id)
    {

        $floornumbers = DB::select("SELECT   DISTINCT aqar_details.name_ar as floornumber
        FROM `aqars`
        INNER JOIN aqar_sections on aqars.id=aqar_sections.aqar_id
        INNER JOIN aqar_details on aqar_details.id=aqar_sections.sub_section_id
        WHERE aqars.category_id=$id and aqar_sections.section_id=1  group by aqars.id  ORDER BY aqar_details.id;");

        $arr=[];
        foreach($floornumbers as $number){

            array_push($arr, $number->floornumber);
        }
        return $arr;



    }

    public function years($cat_id)
    {

        $cars=Car::select('year')->where('category_id', '=', $this->id)->orderby('year')->distinct()->get();

        $arr=[];
        foreach($cars as $car){

            array_push($arr, $car->year);
        }
        return $arr;



    }

    public function placetable($subcat_id)
    {

        $places=Place::select('place_tables.name_ar' ,'place_tables.id')->join('place_tables', 'places.id', '=', 'place_tables.place_id')->where('places.sub_category_id', '=',$subcat_id)->distinct()->get();
        $arr=[];
        foreach($places as $place){

            $item['id']=$place->id;
            $item['name']= $place->name_ar;
            array_push($arr, $item);
        }
        return $arr;



    }



}
