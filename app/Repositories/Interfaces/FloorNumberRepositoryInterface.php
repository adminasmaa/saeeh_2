<?php


namespace App\Repositories\Interfaces;


interface FloorNumberRepositoryInterface
{


    public function getAll($data);

    public function create();

    public function edit($data);

    public function show($Id);

    public function destroy($data);

    public function store($request);

    public function update($data,$request);
}
