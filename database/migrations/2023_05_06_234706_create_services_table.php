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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->smallInteger('category'); // to indicate if it is surgery, procedure or others
            $table->unsignedBigInteger('department_unit_id')->nullable();
            $table->foreign('department_unit_id')->references('id')->on('department_units');
            $table->unsignedBigInteger('income_head');
            $table->foreign('income_head')->references('id')->on('income_heads');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
