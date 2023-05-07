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
        Schema::create('clinics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_unit_id');
            $table->foreign('department_unit_id')->references('id')->on('department_units');
            $table->string('clinic_name');
            $table->boolean('is_consultation_charged');
            $table->boolean('is_clinic_primary');
            $table->integer('patient_per_day');
            $table->unsignedBigInteger('created_by');
            $table->foreign('created_by')->references('id')->on('users');

            $table->timestamps();//remember to create serviceable to link clinic to a particular service charge;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clinics');
    }
};
