<?php

namespace App\Http\Controllers\Dashboard;


use App\DataTables\AqarDataTable;
use App\Http\Controllers\Controller;

use App\Models\Aqar;
use App\Models\Category;
use App\Models\AqarService;
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
       $details = AqarService::setEagerLoads([])->join('aqar_setting', 'aqar_setting.detail_id', '=', 'aqar_details.id')
       ->where('category_id',$id)->where('display',1)->with('subservices')->get(); 
       $arr=[]; 
       return view('dashboard.aqars.details', compact('details','arr'));
    }

    public function getsetting1($id,$aqar_id)
    { 
       $details = AqarService::setEagerLoads([])->join('aqar_setting', 'aqar_setting.detail_id', '=', 'aqar_details.id')
       ->where('category_id',$id)->where('display',1)->with('subservices')->get();
       $aqar = Aqar::with('aqarSection')->find($aqar_id);
       $arr=[];
       foreach($aqar->aqarSection as $item){
        array_push($arr,$item->sub_section_id);
       }
     //  return $arr;
       return view('dashboard.aqars.details', compact('details','aqar','arr'));
    }

}
