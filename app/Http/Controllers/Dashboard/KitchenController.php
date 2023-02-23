<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\KitchensDataTable;
use App\Http\Controllers\Controller;

use App\Models\Kitchen;
use App\Repositories\Interfaces\KitchenRepositoryInterface;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class KitchenController extends Controller
{


    private KitchenRepositoryInterface $kitchenRepository;

    public function __construct(KitchenRepositoryInterface $kitchenRepository)
    {
        $this->kitchenRepository = $kitchenRepository;
    }

    public function index(KitchensDataTable $kitchensDataTable)
    {
        return $this->kitchenRepository->getAll($kitchensDataTable);

    }


    public function show($id)
    {
        return $this->kitchenRepository->show($id);


    }


    public function create()
    {

        return $this->kitchenRepository->create();


    }//end of create


    public function store(Request $request)
    {
        $request->validate([

                'name_ar' => 'required',

            ]
        );


        return $this->kitchenRepository->store($request);

    }//end of store

    /*----------------------------------------------------
      || Name     : redirect to edit pages          |
      || Tested   : Done                                    |
      ||                                     |
     ||                                    |
       -----------------------------------------------------*/

    public function edit($id)
    {
        return $this->kitchenRepository->edit($id);


    }//end of user

    /*----------------------------------------------------
     || Name     : update data into database using users        |
     || Tested   : Done                                    |
       ||                                     |
        ||                                    |
           -----------------------------------------------------*/

    public function update(Request $request, Kitchen $kitchen)
    {
        $request->validate([
            'name_ar' => ['required'],

        ]);

        return $this->kitchenRepository->update($kitchen, $request);


    }//end of update

    /*----------------------------------------------------
 || Name     : delete data into database using users        |
 || Tested   : Done                                    |
 ||                                     |
 ||                                    |
   -----------------------------------------------------*/

    public function destroy(Kitchen $kitchen)
    {

        return $this->kitchenRepository->destroy($kitchen);


    }//end of destroy

}
