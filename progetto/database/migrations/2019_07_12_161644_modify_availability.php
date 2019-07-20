<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyAvailability extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // Schema::table('availability', function(Blueprint $table){
     //      $table->dropColumn('size');
     //  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
  //      Schema::table('availability', function (Blueprint $table){
    //        $table->enum('size', ['S','M','L','XL','null']);
      //  });

    }
}
