<?php


namespace App\Repositories\IRepositories;


interface IRoleRepository
{


    public function getAll($data);

    public function create();

    public function edit($role);

    public function show($Id);

    public function destroy($role);

    public function store($request);

    public function update($role,$request);
}
