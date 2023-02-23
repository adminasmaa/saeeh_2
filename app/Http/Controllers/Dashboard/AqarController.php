<?php

namespace App\Http\Controllers\Dashboard;


use App\DataTables\AqarDataTable;
use App\Http\Controllers\Controller;

use App\Models\Aqar;
use App\Models\Category;
use App\Repositories\Interfaces\AqarRepositoryInterface;
use App\Repositories\Eloquent\AqarRepository;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AqarController extends Controller
{


    protected $AqarRepository;
 
    public function __construct()
    {
        $this->AqarRepository=new AqarRepository();
    }

    public function index(AqarDataTable $AqarDataTable)
    {

        return $this->AqarRepository->getAll($AqarDataTable);

    }


    public function show($id)
    {
        return $this->AqarRepository->show($id);


    }


    public function create()
    {

        return $this->AqarRepository->create();


    }//end of create


    public function store(Request $request)
    {
        dd($request);
        die;
        $request->validate([

                'name_ar' => 'required',
                'name_en' => 'nullable',
                'Aqar_order' => 'required',
                'Aqar_error' => 'required',
                'const_from' => 'required',
                'const_to' => 'required',
                'address' => 'required',
                'descrption_ar' => 'required',
                'descrption_en' => 'nullable',
                'display_photo' => 'required',
                'phone_one' => 'required',
                'phone_two' => 'nullable',
                'notify_photo' => 'nullable',
                'google_mark_link' => 'nullable',
                'Aqar_link' => 'nullable',
                'share_link' => 'nullable',
                'time_check' => 'nullable',
                'seen_counter' => 'required',
                'delivery' => 'nullable',
                'diff_time' => 'nullable',
                'const_time' => 'nullable',
                'latitude' => 'nullable',
                'longitude' => 'nullable',
                'rest_one' => 'nullable',
                'rest_two' => 'nullable',
                'rest_three' => 'nullable',
        // 'social_media',// enum ,['facebook','instagram']

            ]
        );

        return $this->AqarRepository->store($request);

    }//end of store

    /*----------------------------------------------------
      || Name     : redirect to edit pages          |
      || Tested   : Done                                    |
      ||                                     |
     ||                                    |
       -----------------------------------------------------*/

    public function edit($id)
    {
        return $this->AqarRepository->edit($id);


    }//end of user

    /*----------------------------------------------------
     || Name     : update data into database using users        |
     || Tested   : Done                                    |
       ||                                     |
        ||                                    |
           -----------------------------------------------------*/

    public function update(Request $request, $id)
    {
        $request->validate([

            'name_ar' => 'required',
            'name_en' => 'nullable',
            'Aqar_order' => 'required',
            'Aqar_error' => 'required',
            'const_from' => 'required',
            'const_to' => 'required',
            'address' => 'required',
            'descrption_ar' => 'required',
            'descrption_en' => 'nullable',
            'display_photo' => 'required',
            'phone_one' => 'required',
            'phone_two' => 'nullable',
            'notify_photo' => 'nullable',
            'google_mark_link' => 'nullable',
            'Aqar_link' => 'nullable',
            'share_link' => 'nullable',
            'time_check' => 'nullable',
            'seen_counter' => 'required',
            'delivery' => 'nullable',
            'diff_time' => 'nullable',
            'const_time' => 'nullable',
            'latitude' => 'nullable',
            'longitude' => 'nullable',
            'rest_one' => 'nullable',
            'rest_two' => 'nullable',
            'rest_three' => 'nullable',
    // 'social_media',// enum ,['facebook','instagram']

            ]
        );
        $Aqar = Aqar::find($id);

        return $this->AqarRepository->update($Aqar, $request);


    }//end of update

    /*----------------------------------------------------
 || Name     : delete data into database using users        |
 || Tested   : Done                                    |
 ||                                     |
 ||                                    |
   -----------------------------------------------------*/

    public function destroy($id)
    {
        $Aqar =Aqar::find($id);

        return $this->AqarRepository->destroy($Aqar);


    }//end of destroy

}
