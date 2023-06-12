<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $models = ['users', 'mediators','advertising','notifications','brands','cars','sections','message','bookings','floors','commissions','conditioning_types','places','balances','invoices','deposits',
            'countries', 'cities','categories','settings','roles','questions','problems','areas','aquarcategories','services_aqars','aqar_reviews','place_categories','aquarbooking','aqar_comments','aqar_setting','services','car_positions','kitchens','aqars','reviewElements','car_comments','car_reviews'
        ];
        $maps = ['create', 'update', 'read', 'delete'];

        foreach ($models as $model) {


            foreach ($maps as $map) {

                Permission::create([

                    'name' => $map . '_' . $model,
                    'display_name' => $map . '_' . $model,
                    'description' => $map . '_' . $model
                ]);

            }
        }
    }
}
