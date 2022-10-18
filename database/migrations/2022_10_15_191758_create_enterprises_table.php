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
        Schema::create('enterprises', function (Blueprint $table) {

            $table->id();

            $table->string('name', 50);

            $table->string('street', 45);

            $table->string('street_number', 10);

            $table->string('discrict');

            $table->string('city');

            $table->string('cnpj', 20);

            $table->string('ie', 45);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enterprises');
    }
};
