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
        Schema::create('contest_registers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idUser');
            $table->bigInteger('idLomba');
            $table->string('photo');
            $table->string('status');
            $table->string('file1');
            $table->string('ktm');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contest_registers');
    }
};
