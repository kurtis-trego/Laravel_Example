<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('tests', function (Blueprint $table) {
        
                $table->bigIncrements('id');
                $table->string('item_name');
                $table->string('sku_no');
                $table->integer('price');
                $table->date('fareDate');
                $table->integer('pickupTime');
                $table->timestamps();
                //wrong migration
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
