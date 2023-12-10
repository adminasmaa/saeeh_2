<?php

namespace App\Http\Resources;

use App\Models\Car;
use App\Models\CarBooking;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class CarBookingListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */


    public function toArray($request)
    {
        $lang = $request->header('localization');
        $exchangecurrency=json_decode(file_get_contents('https://api.fastforex.io/fetch-one?api_key=d128a16e06-599e63df4b-runi3f&from=MAD&to=KWD'))->result->KWD;

        if ($lang == 'en') {
            $name = 'name_en';
            $status ='status_en';
            $currency ='currency';


        } else {
            $name = 'name_ar';
            $status ='status_ar';
            $currency ='currency_ar';


        }
        $cur=$this->city->country->currency;

        return [
            "id" => $this->car()->select('id')->get()[0]->id ?? 0,
            "book_id"=>$this->id,
            "name" => $this->car()->select($name)->get()[0]->$name ?? '',
            'day_count' => $this->day_count,
            "fixed_price" => $this->fixed_price ?? 0,
            "currency" => $this->city->country->$currency?? '',
            "currency_code" => $this->city->country->currency?? '',
            "Reservation_deposit" => $this->fixed_price ?? $this->total_price/$this->day_count,
            'total' => $this->total_price ?? 0,
            "status" => $this->bookingStatus->$status ?? '',   
            "image" => asset('images/cars') . "/" . $this->car->main_image_ads ?? '',
            "changed_price" => json_decode($this->changed_price) ?? NULL,
            "cancel_byme" => $this->cancel_user_id ==Auth::id()?true:false,
            'invoice_id'=>$this->payment->invoice_id ?? NULL,
            "exchange_KWD"=>number_format((json_decode(file_get_contents('https://api.fastforex.io/fetch-one?api_key=d128a16e06-599e63df4b-runi3f&from='.$cur.'&to=KWD'))->result->KWD), 3),
                "created_at" => $this->created_at ?? ''

        ];


    }
}
