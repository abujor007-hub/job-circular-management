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
        Schema::create('job_data_collections', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('countryName');
            $table->string('work');
            $table->string('age');
            $table->string('companyName');
            $table->string('salary');
            $table->string('facility');
            $table->string('raf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_data_collections');
    }
};
