<?php

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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->unsignedSmallInteger('plate_code');
            $table->string('region'); // Marmara, Ege, İç Anadolu, Akdeniz, Karadeniz, Doğu Anadolu, Güneydoğu Anadolu
            $table->text('industrial_zones'); // e.g. "Başpınar OSB, Küsget"
            $table->string('delivery_time'); // e.g. "24-48 Saat"
            $table->timestamps();

            $table->index('plate_code');
            $table->index('region');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
