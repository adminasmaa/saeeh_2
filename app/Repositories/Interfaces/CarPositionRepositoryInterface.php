<?php


namespace App\Repositories\Interfaces;


interface CarPositionRepositoryInterface
{


    public function getAll($data);

    public function create();

    public function edit($Id);

    public function show($Id);

    public function destroy($carPosition);

    public function store($request);

    public function update($carPosition, $request);
}
