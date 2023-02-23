<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\FreeServicesDataTable;
use App\Http\Controllers\Controller;

use App\Models\FreeService;
use App\Repositories\Interfaces\FreeServiceRepositoryInterface;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FreeServiceController extends Controller
{


    private FreeServiceRepositoryInterface $freeServiceRepository;

    public function __construct(FreeServiceRepositoryInterface $freeServiceRepository)
    {
        $this->freeServiceRepository = $freeServiceRepository;
    }

    public function index(FreeServicesDataTable $freeServicesDataTable)
    {
        return $this->freeServiceRepository->getAll($freeServicesDataTable);

    }


    public function show($id)
    {
        return $this->freeServiceRepository->show($id);


    }


    public function create()
    {

        return $this->freeServiceRepository->create();


    }//end of create


    public function store(Request $request)
    {
        $request->validate([

                'name_ar' => 'required',

            ]
        );


        return $this->freeServiceRepository->store($request);

    }//end of store

    /*----------------------------------------------------
      || Name     : redirect to edit pages          |
      || Tested   : Done                                    |
      ||                                     |
     ||                                    |
       -----------------------------------------------------*/

    public function edit($id)
    {
        return $this->freeServiceRepository->edit($id);


    }//end of user

    /*----------------------------------------------------
     || Name     : update data into database using users        |
     || Tested   : Done                                    |
       ||                                     |
        ||                                    |
           -----------------------------------------------------*/

    public function update(Request $request, FreeService $freeService)
    {
        $request->validate([
            'name_ar' => ['required'],

        ]);

        return $this->freeServiceRepository->update($freeService, $request);


    }//end of update

    /*----------------------------------------------------
 || Name     : delete data into database using users        |
 || Tested   : Done                                    |
 ||                                     |
 ||                                    |
   -----------------------------------------------------*/

    public function destroy(FreeService $freeService)
    {

        return $this->freeServiceRepository->destroy($freeService);


    }//end of destroy

}
