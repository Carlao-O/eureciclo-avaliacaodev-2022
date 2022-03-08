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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('buyer');
            $table->text('description');
            $table->decimal('price', 6, 2);
            $table->integer('quantity');
            $table->string('address');
            $table->string('supplier');
            
            $table->unsignedBigInteger('file_id');
            $table->foreign('file_id')->references('id')->on('files');
            
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
        Schema::dropIfExists('sales');
    }
};
