<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\AnotherroomsDataTable;
use App\Http\Controllers\Controller;

use App\Models\AnotherRoom;
use App\Repositories\Interfaces\AnotherRoomRepositoryInterface;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AnotherRoomController extends Controller
{


    private AnotherRoomRepositoryInterface $anotherRoomRepository;

    public function __construct(AnotherRoomRepositoryInterface $anotherRoomRepository)
    {
        $this->anotherRoomRepository = $anotherRoomRepository;
    }

    public function index(AnotherroomsDataTable $anotherroomsDataTable)
    {
        return $this->anotherRoomRepository->getAll($anotherroomsDataTable);

    }


    public function show($id)
    {
        return $this->anotherRoomRepository->show($id);


    }


    public function create()
    {

        return $this->anotherRoomRepository->create();


    }//end of create


    public function store(Request $request)
    {
        $request->validate([

                'name_ar' => 'required',

            ]
        );


        return $this->anotherRoomRepository->store($request);

    }//end of store

    /*----------------------------------------------------
      || Name     : redirect to edit pages          |
      || Tested   : Done                                    |
      ||                                     |
     ||                                    |
       -----------------------------------------------------*/

    public function edit($id)
    {
        return $this->anotherRoomRepository->edit($id);


    }//end of user

    /*----------------------------------------------------
     || Name     : update data into database using users        |
     || Tested   : Done                                    |
       ||                                     |
        ||                                    |
           -----------------------------------------------------*/

    public function update(Request $request, AnotherRoom $anotherRoom)
    {
        $request->validate([
            'name_ar' => ['required'],

        ]);

        return $this->anotherRoomRepository->update($anotherRoom, $request);


    }//end of update

    /*----------------------------------------------------
 || Name     : delete data into database using users        |
 || Tested   : Done                                    |
 ||                                     |
 ||                                    |
   -----------------------------------------------------*/

    public function destroy(AnotherRoom $anotherRoom)
    {

        return $this->anotherRoomRepository->destroy($anotherRoom);


    }//end of destroy

}
