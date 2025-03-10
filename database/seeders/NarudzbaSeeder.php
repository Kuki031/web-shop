<?php

namespace Database\Seeders;

use App\Models\Narucitelj;
use App\Models\Narudzba;
use App\Models\Proizvod;
use Illuminate\Database\Seeder;

class NarudzbaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $narucitelji = Narucitelj::all();
        $proizvodi = Proizvod::all();

        for($i = 0 ; $i < 20 ; $i++)
        {
            $randNarucitelj = $narucitelji->random();
            $randProizvod = $proizvodi->random();

            Narudzba::create([
                "narucitelj_id" => $randNarucitelj->id,
                "proizvod_id" => $randProizvod->id,
                "kolicina" => fake()->numberBetween(1, 10)
            ]);
        }
    }
}
