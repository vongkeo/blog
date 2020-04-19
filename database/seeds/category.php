<?php

use Illuminate\Database\Seeder;
use App\Model\category as ModelCat;
use Carbon\Carbon;

class category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' => 'Devl Media123',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Devl Media123',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
             [
                'name' => 'Devl Media123',
                'created_at' => Carbon::now(),              
                'updated_at' => Carbon::now()
            ], [
                'name' => 'Devl Media1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'name' => 'Devl Media1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'name' => 'Devl Media1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'name' => 'Devl Media1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        );
        ModelCat::insert($data);
    }
}
