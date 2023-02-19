<?php


namespace App\Repositories\Interfaces;


interface BookingRepositoryInterface
{


    public function getAll($data);



    public function show($Id);

    public function destroy($booking);


}
