<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rocks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable()->default(null)->comment('anh da, hoac icon...');
            $table->unsignedBigInteger('product_id');
            $table->bigInteger('price')->default(0);
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
        Schema::dropIfExists('rocks');
    }
}
