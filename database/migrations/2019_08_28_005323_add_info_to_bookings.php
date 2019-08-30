<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInfoToBookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('firstName');
            $table->string('lastName');
            $table->string('company');    
            $table->integer('accountNumber');
            //Date is integer?
            $table->integer('date');
            $table->date('datetypedate');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('firstName');
            $table->dropColumn('lastName');
            $table->dropColumn('company');  
            $table->dropColumn('accountNumber');  
            $table->dropColumn('date'); 
            $table->dropColumn('datetypedate'); 

        });
    }
}
