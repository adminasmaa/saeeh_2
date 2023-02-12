<?php


namespace App\Repositories\IRepositories;


interface ICityRepository
{


    public function getAll($data);

    public function create();

    public function edit($Id);

    public function show($Id);

    public function destroy($city);

    public function store($request);

    public function update($city, $request);
}
