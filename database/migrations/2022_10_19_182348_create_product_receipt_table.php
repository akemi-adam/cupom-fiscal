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
        Schema::create('product_receipt', function (Blueprint $table) {

            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            
            $table->foreignId('receipt_id')->constrained()->onDelete('cascade');
            
            $table->integer('amount');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_receipt');
    }
};
