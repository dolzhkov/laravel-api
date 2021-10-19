<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modifications')->insert([
            'title' => '1.6 FSI',
            'model_id' => 1,
            'generation_id' => 1
        ]);
    }
}
