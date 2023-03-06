<?php

namespace App\Http\Controllers\Dashboard;


use App\DataTables\AqarDataTable;
use App\Http\Controllers\Controller;

use App\Models\Aqar;
use App\Models\Category;
use App\Models\AqarSetting;
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
        
        $request['floor_id'] = $request['floor_id']!=null?json_encode($request['floor_id']): json_encode([]);
        $request['floor_number_id'] = $request['floor_number_id']!=null?json_encode($request['floor_number_id']):json_encode([]);
        $request['masterroom'] = $request['masterroom']!=null? json_encode($request['masterroom']): json_encode([]);
        $request['normalroom'] = $request['normalroom']!=null? json_encode($request['normalroom']): json_encode([]);
        $request['service_id'] = $request['service_id']!=null?json_encode($request['service_id']): json_encode([]);
        $request['free_service_id'] = $request['free_service_id']!=null?json_encode($request['free_service_id']): json_encode([]);
        $request['crew_id'] = $request['crew_id']!=null?json_encode($request['crew_id']): json_encode([]);
        $request['kitchen_id'] = $request['kitchen_id']!=null?json_encode($request['kitchen_id']): json_encode([]);
        $request['bathroom_id'] = $request['bathroom_id']!=null?json_encode($request['bathroom_id']): json_encode([]);
        $request['laundry_id'] = $request['laundry_id']!=null?json_encode($request['laundry_id']): json_encode([]);
        $request['another_room_id'] = $request['another_room_id']!=null?json_encode($request['another_room_id']): json_encode([]);
        $request['conditioning_type_id'] = ($request['conditioning_type_id']!=null)?json_encode($request['conditioning_type_id']):json_encode([]);
        $data['person_num'] = $request['person_num'];
        $data['price'] = $request['price'];
        $request['changed_price']=json_encode($data)!=null?json_encode($data):json_encode([]);
        
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
        $request['floor_id'] = $request['floor_id']!=null?json_encode($request['floor_id']): json_encode([]);
        $request['floor_number_id'] = $request['floor_number_id']!=null?json_encode($request['floor_number_id']):json_encode([]);
        $request['masterroom'] = $request['masterroom']!=null? json_encode($request['masterroom']): json_encode([]);
        $request['normalroom'] = $request['normalroom']!=null? json_encode($request['normalroom']): json_encode([]);
        $request['service_id'] = $request['service_id']!=null?json_encode($request['service_id']): json_encode([]);
        $request['free_service_id'] = $request['free_service_id']!=null?json_encode($request['free_service_id']): json_encode([]);
        $request['crew_id'] = $request['crew_id']!=null?json_encode($request['crew_id']): json_encode([]);
        $request['kitchen_id'] = $request['kitchen_id']!=null?json_encode($request['kitchen_id']): json_encode([]);
        $request['bathroom_id'] = $request['bathroom_id']!=null?json_encode($request['bathroom_id']): json_encode([]);
        $request['laundry_id'] = $request['laundry_id']!=null?json_encode($request['laundry_id']): json_encode([]);
        $request['another_room_id'] = $request['another_room_id']!=null?json_encode($request['another_room_id']): json_encode([]);
        $request['conditioning_type_id'] = ($request['conditioning_type_id']!=null)?json_encode($request['conditioning_type_id']):json_encode([]);
        $data['person_num'] = $request['person_num'];
        $data['price'] = $request['price'];
        $request['changed_price']=json_encode($data)!=null?json_encode($data):json_encode([]);
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


    public function getsetting($id)
    { 
        $qarsetting = AqarSetting::where('category_id',$id)->where('display',1)->get();
        return  $qarsetting;
    }

}
