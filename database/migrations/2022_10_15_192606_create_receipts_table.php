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
        Schema::create('receipts', function (Blueprint $table) {

            $table->id();
            
            $table->timestamps();

            $table->integer('valid')->defatult(1);

            $table->decimal('total_value', 6, 2);

            $table->decimal('tax', 5, 2);

            $table->foreignId('enterprise_id')->constrained()->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receipts');
    }
};
