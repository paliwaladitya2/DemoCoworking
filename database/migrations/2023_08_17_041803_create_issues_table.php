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
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')->references('id')->on('property_approveds');
            $table->string('company');
            $table->string('floor');
            $table->string('name');
            $table->string('seat');
            $table->string('department');
            $table->string('title');
            $table->string('description');
            $table->string('email');
            $table->string('image')->nullable();
            $table->string('number');
            $table->string('date');
            $table->string('priority');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issues');
    }
};
