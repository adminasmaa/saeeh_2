<?php


namespace App\Repositories\Interfaces;


interface SettingRepositoryInterface
{


    public function getAll();

    public function create();

    public function edit($setting);

    public function show($Id);

    public function destroy($role);

    public function store($request);

    public function update($request);
}
