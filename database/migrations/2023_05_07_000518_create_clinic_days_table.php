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
        Schema::create('clinic_days', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_unit_id')->nullable();
            $table->foreign('department_unit_id')->references('id')->on('department_units');
            $table->string('days');
            $table->string('time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinic_days');
    }
};
