<?php

use App\Merchandice;
use Illuminate\Database\Seeder;

class MerchandiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Merchandice::class, 10)->create();

    }
}
