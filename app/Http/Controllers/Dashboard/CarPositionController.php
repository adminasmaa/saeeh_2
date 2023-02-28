<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\CarPositionDataTable;
use App\Http\Controllers\Controller;

use App\Models\CarPosition;
use App\Repositories\Interfaces\CarPositionRepositoryInterface;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CarPositionController extends Controller
{


    private CarPositionRepositoryInterface $carPositionRepository;

    public function __construct(CarPositionRepositoryInterface $carPositionRepository)
    {
        $this->carPositionRepository = $carPositionRepository;
    }

    public function index(CarPositionDataTable $carPositionDataTable)
    {
        return $this->carPositionRepository->getAll($carPositionDataTable);

    }


    public function show($id)
    {
        return $this->carPositionRepository->show($id);


    }


    public function create()
    {

        return $this->carPositionRepository->create();


    }//end of create



    public function store(Request $request)
    {
        $request->validate([

            'name_ar', // required
            'name_en', // nullable
            'active', // required,default (0)

            ]
        );


        return $this->carPositionRepository->store($request);

    }//end of store

    /*----------------------------------------------------
      || Name     : redirect to edit pages          |
      || Tested   : Done                                    |
      ||                                     |
     ||                                    |
       -----------------------------------------------------*/

    public function edit($id)
    {
        return $this->carPositionRepository->edit($id);


    }//end of user

    /*----------------------------------------------------
     || Name     : update data into database using users        |
     || Tested   : Done                                    |
       ||                                     |
        ||                                    |
           -----------------------------------------------------*/

    public function update(Request $request, CarPosition $carPosition)
    {
        $request->validate([

            'name_ar', // required
            'name_en', // nullable
            'active', // required,default (0)

            ]
        );

        return $this->carPositionRepository->update($carPosition, $request);


    }//end of update

    /*----------------------------------------------------
 || Name     : delete data into database using users        |
 || Tested   : Done                                    |
 ||                                     |
 ||                                    |
   -----------------------------------------------------*/

    public function destroy(CarPosition $carPosition)
    {

        return $this->carPositionRepository->destroy($carPosition);


    }//end of destroy

}
