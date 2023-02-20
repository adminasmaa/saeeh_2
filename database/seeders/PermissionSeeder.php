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
        $models = ['users', 'mediators', 'advertising', 'brands', 'cars', 'bookings', 'car_comments',
            'countries', 'cities', 'categories', 'settings', 'roles', 'questions', 'problems'
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
