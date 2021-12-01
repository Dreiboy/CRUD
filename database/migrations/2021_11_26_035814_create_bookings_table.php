<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('Firstname');
            $table->string('Middlename');
            $table->string('Surname');
            $table->string('Birthday');
            $table->string('Age');
            $table->string('StreetName');
            $table->string('City');
            $table->string('PostalCode');
            $table->string('PhoneNumber');
            $table->string('MobileNumber');
            $table->string('Email');
            $table->string('FullName');
            $table->string('EmergencyMobileNumber');
            $table->string('Relationship');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
