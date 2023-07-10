<?php

namespace App\Http\Controllers\Dashboard;


use App\DataTables\CarsDataTable;
use App\Http\Controllers\Controller;

use App\Models\Car;
use App\Models\Category;
use App\Repositories\Interfaces\CarRepositoryInterface;
use App\Services\TwoFactorService;
use DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CarController extends Controller
{


    private CarRepositoryInterface $CarRepository;

    public function __construct(CarRepositoryInterface $CarRepository)
    {
        $this->CarRepository = $CarRepository;
    }

    public function index(CarsDataTable $carsDataTable)
    {

        return $this->CarRepository->getAll($carsDataTable);

    }


    public function show($id)
    {
        return $this->CarRepository->show($id);


    }


    public function create()
    {

        return $this->CarRepository->create();


    }//end of create


    public function store(Request $request)
    {
        $request->validate([

                'name_ar' => 'required',

            ]
        );


        return $this->CarRepository->store($request);

    }//end of store

    /*----------------------------------------------------
      || Name     : redirect to edit pages          |
      || Tested   : Done                                    |
      ||                                     |
     ||                                    |
       -----------------------------------------------------*/

    public function edit($id)
    {
        return $this->CarRepository->edit($id);


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

            ]
        );
        $car = Car::find($id);

        return $this->CarRepository->update($car, $request);


    }//end of update

    /*----------------------------------------------------
 || Name     : delete data into database using users        |
 || Tested   : Done                                    |
 ||                                     |
 ||                                    |
   -----------------------------------------------------*/

    public function destroy($id)
    {
        $car =Car::find($id);

        return $this->CarRepository->destroy($car);


    }//end of destroy

}
