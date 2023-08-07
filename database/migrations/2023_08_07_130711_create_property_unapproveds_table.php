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
        Schema::create('property_unapproveds', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->unsignedInteger('price');
            $table->unsignedInteger('no_of_seats');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->string('image5');
            $table->string('image6');
            $table->string('image7');
            $table->longText('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->boolean('coworking');
            $table->boolean('cabin');
            $table->boolean('meetingrooms');
            $table->boolean('trainingrooms');
            $table->boolean('wifi');
            $table->boolean('parking');
            $table->boolean('lounge');
            $table->boolean('cafeteria');
            $table->boolean('air_conditioning');
            $table->boolean('it_support');
            $table->boolean('locker');
            $table->boolean('24*7');
            $table->string('name');
            $table->string('username');
            $table->string('email');
            $table->string('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_unapproveds');
    }
};
