<?php

use Illuminate\Database\Seeder;
use App\Model\tags as ModelTags;
use Carbon\Carbon;

class tag extends Seeder
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
                'name' => 'Devl Media',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        );
        ModelTags::insert($data);
    }
}
