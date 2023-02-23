<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\FloorNumbersDataTable;
use App\DataTables\FloorsDataTable;
use App\Http\Controllers\Controller;

use App\Models\FloorNumber;
use App\Repositories\Interfaces\FloorNumberRepositoryInterface;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FloorNumberController extends Controller
{


    private FloorNumberRepositoryInterface $floorRepository;

    public function __construct(FloorNumberRepositoryInterface $floorRepository)
    {
        $this->floorRepository = $floorRepository;
    }

    public function index(FloorNumbersDataTable $floorsDataTable)
    {
        return $this->floorRepository->getAll($floorsDataTable);

    }


    public function show($id)
    {
        return $this->floorRepository->show($id);


    }


    public function create()
    {

        return $this->floorRepository->create();


    }//end of create


    public function store(Request $request)
    {
        $request->validate([

                'name_ar' => 'required',

            ]
        );


        return $this->floorRepository->store($request);

    }//end of store

    /*----------------------------------------------------
      || Name     : redirect to edit pages          |
      || Tested   : Done                                    |
      ||                                     |
     ||                                    |
       -----------------------------------------------------*/

    public function edit($id)
    {
        return $this->floorRepository->edit($id);


    }//end of user

    /*----------------------------------------------------
     || Name     : update data into database using users        |
     || Tested   : Done                                    |
       ||                                     |
        ||                                    |
           -----------------------------------------------------*/

    public function update(Request $request, FloorNumber $floorNumber)
    {
        $request->validate([
            'name_ar' => ['required'],

        ]);

        return $this->floorRepository->update($floorNumber, $request);


    }//end of update

    /*----------------------------------------------------
 || Name     : delete data into database using users        |
 || Tested   : Done                                    |
 ||                                     |
 ||                                    |
   -----------------------------------------------------*/

    public function destroy(FloorNumber $floorNumber)
    {

        return $this->floorRepository->destroy($floorNumber);


    }//end of destroy

}
