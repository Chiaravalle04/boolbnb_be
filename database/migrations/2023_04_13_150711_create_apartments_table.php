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
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('cover');
            $table->string('type');
            $table->string('address');
            $table->double('long', 10, 7);
            $table->double('lat', 10, 7);
            $table->decimal('price', $precision = 8, $scale = 2)->unsigned();
            $table->boolean('availability');
            $table->tinyInteger('room')->unsigned();
            $table->tinyInteger('bed')->unsigned();
            $table->tinyInteger('bathroom')->unsigned();
            $table->smallInteger('square_meters')->unsigned();
            $table->boolean('visibility');
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
        Schema::dropIfExists('apartments');
    }
};
