<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\CrewsDataTable;
use App\Http\Controllers\Controller;

use App\Models\Crew;
use App\Repositories\Interfaces\CrewRepositoryInterface;
use App\Services\TwoFactorService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CrewController extends Controller
{


    private CrewRepositoryInterface $crewRepository;

    public function __construct(CrewRepositoryInterface $crewRepository)
    {
        $this->crewRepository = $crewRepository;
    }

    public function index(CrewsDataTable $crewsDataTable)
    {
        return $this->crewRepository->getAll($crewsDataTable);

    }


    public function show($id)
    {
        return $this->crewRepository->show($id);


    }


    public function create()
    {

        return $this->crewRepository->create();


    }//end of create


    public function store(Request $request)
    {
        $request->validate([

                'name_ar' => 'required',

            ]
        );


        return $this->crewRepository->store($request);

    }//end of store

    /*----------------------------------------------------
      || Name     : redirect to edit pages          |
      || Tested   : Done                                    |
      ||                                     |
     ||                                    |
       -----------------------------------------------------*/

    public function edit($id)
    {
        return $this->crewRepository->edit($id);


    }//end of user

    /*----------------------------------------------------
     || Name     : update data into database using users        |
     || Tested   : Done                                    |
       ||                                     |
        ||                                    |
           -----------------------------------------------------*/

    public function update(Request $request, Crew $crew)
    {
        $request->validate([
            'name_ar' => ['required'],

        ]);

        return $this->crewRepository->update($crew, $request);


    }//end of update

    /*----------------------------------------------------
 || Name     : delete data into database using users        |
 || Tested   : Done                                    |
 ||                                     |
 ||                                    |
   -----------------------------------------------------*/

    public function destroy(Crew $crew)
    {

        return $this->crewRepository->destroy($crew);


    }//end of destroy

}
