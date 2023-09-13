<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\AqarBookingDataTable;
use App\Http\Controllers\Controller;

use App\Repositories\Interfaces\AqarBookingRepositoryInterface;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AqarBookingController extends Controller
{


    private AqarBookingRepositoryInterface $aqarBookingRepository;

    public function __construct(AqarBookingRepositoryInterface $aqarBookingRepository)
    {
        $this->aqarBookingRepository = $aqarBookingRepository;
    }

    public function index(AqarBookingDataTable $aqarBookingDataTable)
    {
        return $this->aqarBookingRepository->getAll($aqarBookingDataTable);

    }


    public function show($id)
    {
        return $this->aqarBookingRepository->show($id);


    }


    public function create()
    {



    }//end of create


    public function store(Request $request)
    {


    }//end of store

    /*----------------------------------------------------
      || Name     : redirect to edit pages          |
      || Tested   : Done                                    |
      ||                                     |
     ||                                    |
       -----------------------------------------------------*/

    public function edit($id)
    {


    }//end of user

    /*----------------------------------------------------
     || Name     : update data into database using users        |
     || Tested   : Done                                    |
       ||                                     |
        ||                                    |
           -----------------------------------------------------*/

    public function update(Request $request,$id)
    {



    }//end of update

    /*----------------------------------------------------
 || Name     : delete data into database using users        |
 || Tested   : Done                                    |
 ||                                     |
 ||                                    |
   -----------------------------------------------------*/

    public function destroy($id)
    {



    }//end of destroy


    

    public function acceptbooking($aqar_id)
    {

      return $this->aqarBookingRepository->acceptbooking($aqar_id);

    }


    public function rejectbooking($aqar_id)
    {

      return $this->aqarBookingRepository->rejectbooking($aqar_id);

    }

}
