<?php

namespace App\Http\Controllers\Dashboard;


use App\DataTables\PlacesDataTable;
use App\Http\Controllers\Controller;
use App\Models\PlaceTable;
use App\Models\Place;
use App\Models\Category;
use App\Models\PlaceComment;
use App\Models\Notification;
use App\Repositories\Interfaces\PlaceRepositoryInterface;
use App\Services\TwoFactorService;
use DB;
use Alert;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PlaceController extends Controller
{


    private PlaceRepositoryInterface $PlaceRepository;

    public function __construct(PlaceRepositoryInterface $PlaceRepository)
    {
        $this->PlaceRepository = $PlaceRepository;
    }

    public function index(PlacesDataTable $placesDataTable)
    {
       

      //  $place_table = PlaceTable::all();
        $place = Place::all();

       // return view('dashboard.places.index', compact('place','place_table'));

        return $this->PlaceRepository->getAll($placesDataTable);

    }

 
    public function show($id)
    {
        return $this->PlaceRepository->show($id);


    }


    public function create()
    {

        return $this->PlaceRepository->create();


    }//end of create


    public function store(Request $request)
    {
      //  $place_table = PlaceTable::all();

        return $this->PlaceRepository->store($request);

    }//end of store

    /*----------------------------------------------------
      || Name     : redirect to edit pages          |
      || Tested   : Done                                    |
      ||                                     |
     ||                                    |
       -----------------------------------------------------*/

    public function edit($id)
    {
        return $this->PlaceRepository->edit($id);


    }//end of user

    /*----------------------------------------------------
     || Name     : update data into database using users        |
     || Tested   : Done                                    |
       ||                                     |
        ||                                    |
           -----------------------------------------------------*/

    public function update(Request $request, $id)
    {
      //return $request;
    //     $request->validate([

    //         'name_ar' => 'required',
    //         'name_en' => 'nullable',
    //         'place_order' => 'required',
    //         'place_error' => 'required',
    //         'const_from' => 'required',
    //         'const_to' => 'required',
    //         'address' => 'required',
    //         'descrption_ar' => 'required',
    //         'descrption_en' => 'nullable',
    //         'display_photo' => 'required',
    //         'phone_one' => 'required',
    //         'phone_two' => 'nullable',
    //         'notify_photo' => 'nullable',
    //         'google_mark_link' => 'nullable',
    //         'place_link' => 'nullable',
    //         'share_link' => 'nullable',
    //         'time_check' => 'nullable',
    //         'seen_counter' => 'required',
    //         'delivery' => 'nullable',
    //         'diff_time' => 'nullable',
    //         'const_time' => 'nullable',
    //         'latitude' => 'nullable',
    //         'longitude' => 'nullable',
    //         'rest_one' => 'nullable',
    //         'rest_two' => 'nullable',
    //         'rest_three' => 'nullable',
    // // 'social_media',// enum ,['facebook','instagram']

    //         ]
    //     );
         $place = Place::find($id);
        $place_table = PlaceTable::where('place_id', $id)->get();

        return $this->PlaceRepository->update($place, $request,$place_table);
    }//end of update

    /*----------------------------------------------------
 || Name     : delete data into database using users        |
 || Tested   : Done                                    |
 ||                                     |
 ||                                    |
   -----------------------------------------------------*/

    public function destroy($id)
    {
        $Place = Place::find($id);
        $result = $Place->delete();
        // Place::where('detail_id', $id)->delete();
        // $PlaceTable = PlaceTable::where('place_id', $id)->delete();
        if ($result) {
          Alert::toast('Deleted', __('site.deleted_successfully'));
      } else {
          Alert::toast('Deleted', __('site.delete_faild'));
      }
      return back();
    }//end of destroy
    public function destroy2($id)
    {
        $place_table = PlaceTable::find($id);
        $result = $place_table->delete();
        if ($result) {
          Alert::toast('Deleted', __('site.deleted_successfully'));
      } else {
          Alert::toast('Deleted', __('site.delete_faild'));
      }
      return back();
    }//end of destroy
}
