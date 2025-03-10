<?php

namespace Database\Seeders;

use App\Models\Narucitelj;
use Illuminate\Database\Seeder;

class NaruciteljSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Narucitelj::factory(5)->create();
    }
}
