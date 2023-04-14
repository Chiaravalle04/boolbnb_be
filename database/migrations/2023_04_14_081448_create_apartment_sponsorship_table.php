<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartment_sponsorship', function (Blueprint $table) {
            $table->id();

            // Foreign Apartments
            $table->unsignedBigInteger('apartment_id')->nullable();
            $table->foreign('apartment_id')->references('id')->on('apartments')
            ->onUpdate('cascade')->onDelete('cascade');

            // Foreign Sponsorships
            $table->unsignedBigInteger('sponsorship_id')->nullable();
            $table->foreign('sponsorship_id')->references('id')->on('sponsorships')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->dateTime('expired_date');

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
        Schema::dropIfExists('apartment_sponsorship');
    }
};
