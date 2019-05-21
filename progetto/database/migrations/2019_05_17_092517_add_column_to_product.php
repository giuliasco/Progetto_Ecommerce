<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->string('brand');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
  //  public function down()
 //   {
       // Schema::table('product', function (Blueprint $table) {
       //     $table->dropColumn('brand');
     ///   });
   // }
}
