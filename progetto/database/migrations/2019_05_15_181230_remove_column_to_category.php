<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemoveColumnToCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category', function (Blueprint $table) {
            $table->dropColumn('Man');
        });
    }


    public function down()
    {
        Schema::table('category', function (Blueprint $table) {
            $table->enum('Type',['Woman','Man','Kid']) ;
        });
    }
}
