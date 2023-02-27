<?php


namespace App\Repositories\Interfaces;


interface CommissionRepositoryInterface
{


    public function getAll($data);

    public function create();

    public function edit($Id);

    public function show($Id);

    public function destroy($commission);

    public function store($request);

    public function update($commission, $request);
}
