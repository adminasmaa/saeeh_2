<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\FloorsDataTable;
use App\Http\Controllers\Controller;

use App\Models\Floor;
use App\Repositories\Interfaces\FloorRepositoryInterface;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FloorController extends Controller
{


    private FloorRepositoryInterface $floorRepository;

    public function __construct(FloorRepositoryInterface $floorRepository)
    {
        $this->floorRepository = $floorRepository;
    }

    public function index(FloorsDataTable $floorsDataTable)
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

    public function update(Request $request, Floor $floor)
    {
        $request->validate([
            'name_ar' => ['required'],

        ]);

        return $this->floorRepository->update($floor, $request);


    }//end of update

    /*----------------------------------------------------
 || Name     : delete data into database using users        |
 || Tested   : Done                                    |
 ||                                     |
 ||                                    |
   -----------------------------------------------------*/

    public function destroy(Floor $floor)
    {

        return $this->floorRepository->destroy($floor);


    }//end of destroy

}
