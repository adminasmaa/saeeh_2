<?php

namespace App\Http\Controllers\Dashboard;


use App\DataTables\AqarDataTable;
use App\Http\Controllers\Controller;

use App\Models\Aqar;
use App\Models\Category;
use App\Repositories\Interfaces\AqarRepositoryInterface;
use App\Repositories\Eloquent\AqarRepository;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AqarController extends Controller
{


    protected $AqarRepository;
 
    public function __construct()
    {
        $this->AqarRepository=new AqarRepository();
    }

    public function index(AqarDataTable $AqarDataTable)
    {

        return $this->AqarRepository->getAll($AqarDataTable);

    }


    public function show($id)
    {
        return $this->AqarRepository->show($id);


    }


    public function create()
    {

        return $this->AqarRepository->create();


    }//end of create


    public function store(Request $request)
    {
       

        return $this->AqarRepository->store($request);

    }//end of store

    /*----------------------------------------------------
      || Name     : redirect to edit pages          |
      || Tested   : Done                                    |
      ||                                     |
     ||                                    |
       -----------------------------------------------------*/

    public function edit($id)
    {
        return $this->AqarRepository->edit($id);


    }//end of user

    /*----------------------------------------------------
     || Name     : update data into database using users        |
     || Tested   : Done                                    |
       ||                                     |
        ||                                    |
           -----------------------------------------------------*/

    public function update(Request $request, $id)
    {
       
        $Aqar = Aqar::find($id);

        return $this->AqarRepository->update($Aqar, $request);


    }//end of update

    /*----------------------------------------------------
 || Name     : delete data into database using users        |
 || Tested   : Done                                    |
 ||                                     |
 ||                                    |
   -----------------------------------------------------*/

    public function destroy($id)
    {
        $Aqar =Aqar::find($id);

        return $this->AqarRepository->destroy($Aqar);


    }//end of destroy

}
