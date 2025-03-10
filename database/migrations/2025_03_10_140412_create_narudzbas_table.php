<?php

use App\Models\Narucitelj;
use App\Models\Proizvod;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('narudzbas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Narucitelj::class);
            $table->foreignIdFor(Proizvod::class);
            $table->integer("kolicina");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('narudzbas');
    }
};
