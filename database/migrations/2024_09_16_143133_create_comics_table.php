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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('titolo' , 50);
            $table->string('slug',50)->unique();
            $table->text('descrizione')->nullable();
            $table->string('src');
            $table->tinyInteger('prezzo');
            $table->string('serie');
            $table->date('data_vendita');
            $table->string('tipo_di_libro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
