<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\BathroomsDataTable;
use App\Http\Controllers\Controller;

use App\Models\Bathroom;
use App\Repositories\Interfaces\BathRoomRepositoryInterface;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BathRoomController extends Controller
{


    private BathRoomRepositoryInterface $bathRoomRepository;

    public function __construct(BathRoomRepositoryInterface $bathRoomRepository)
    {
        $this->bathRoomRepository = $bathRoomRepository;
    }

    public function index(BathroomsDataTable $bathroomsDataTable)
    {
        return $this->bathRoomRepository->getAll($bathroomsDataTable);

    }


    public function show($id)
    {
        return $this->bathRoomRepository->show($id);


    }


    public function create()
    {

        return $this->bathRoomRepository->create();


    }//end of create


    public function store(Request $request)
    {
        $request->validate([

                'name_ar' => 'required',

            ]
        );


        return $this->bathRoomRepository->store($request);

    }//end of store

    /*----------------------------------------------------
      || Name     : redirect to edit pages          |
      || Tested   : Done                                    |
      ||                                     |
     ||                                    |
       -----------------------------------------------------*/

    public function edit($id)
    {
        return $this->bathRoomRepository->edit($id);


    }//end of user

    /*----------------------------------------------------
     || Name     : update data into database using users        |
     || Tested   : Done                                    |
       ||                                     |
        ||                                    |
           -----------------------------------------------------*/

    public function update(Request $request, Bathroom $bathroom)
    {
        $request->validate([
            'name_ar' => ['required'],

        ]);

        return $this->bathRoomRepository->update($bathroom, $request);


    }//end of update

    /*----------------------------------------------------
 || Name     : delete data into database using users        |
 || Tested   : Done                                    |
 ||                                     |
 ||                                    |
   -----------------------------------------------------*/

    public function destroy(Bathroom $bathroom)
    {

        return $this->bathRoomRepository->destroy($bathroom);


    }//end of destroy

}
