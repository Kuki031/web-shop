<?php

namespace Database\Seeders;

use App\Models\Proizvod;
use Illuminate\Database\Seeder;

class ProizvodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proizvodiImena = ["Laptop", "Mobitel", "Tipkovnica", "Miš", "Monitor", "CPU", "GPU", "Napajanje", "Podloga za miš", "Harddisk", "USB-c", "Pametni sat"];
        $proizvodi = [];

        for($i = 0 ; $i < sizeof($proizvodiImena) ; $i++) {
            array_push($proizvodi, [
                "naziv" => $proizvodiImena[$i],
                "cijena" => fake()->randomFloat(2, 20, 600),
                "opis" => fake()->text(150),
                "slika" => "images/". $i + 1 . ".jpg",
                "broj_kupnji" => fake()->numberBetween(0, 50)
            ]);
        }

        Proizvod::factory()->createMany($proizvodi);
    }
}
