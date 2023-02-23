<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\laundriesDataTable;
use App\Http\Controllers\Controller;

use App\Models\Laundry;
use App\Repositories\Interfaces\LaundryRepositoryInterface;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LaundryController extends Controller
{


    private LaundryRepositoryInterface $laundryRepository;

    public function __construct(LaundryRepositoryInterface $laundryRepository)
    {
        $this->laundryRepository = $laundryRepository;
    }

    public function index(laundriesDataTable $laundriesDataTable)
    {
        return $this->laundryRepository->getAll($laundriesDataTable);

    }


    public function show($id)
    {
        return $this->laundryRepository->show($id);


    }


    public function create()
    {

        return $this->laundryRepository->create();


    }//end of create


    public function store(Request $request)
    {
        $request->validate([

                'name_ar' => 'required',

            ]
        );


        return $this->laundryRepository->store($request);

    }//end of store

    /*----------------------------------------------------
      || Name     : redirect to edit pages          |
      || Tested   : Done                                    |
      ||                                     |
     ||                                    |
       -----------------------------------------------------*/

    public function edit($id)
    {
        return $this->laundryRepository->edit($id);


    }//end of user

    /*----------------------------------------------------
     || Name     : update data into database using users        |
     || Tested   : Done                                    |
       ||                                     |
        ||                                    |
           -----------------------------------------------------*/

    public function update(Request $request, Laundry $laundry)
    {
        $request->validate([
            'name_ar' => ['required'],

        ]);

        return $this->laundryRepository->update($laundry, $request);


    }//end of update

    /*----------------------------------------------------
 || Name     : delete data into database using users        |
 || Tested   : Done                                    |
 ||                                     |
 ||                                    |
   -----------------------------------------------------*/

    public function destroy(Laundry $laundry)
    {

        return $this->laundryRepository->destroy($laundry);


    }//end of destroy

}
