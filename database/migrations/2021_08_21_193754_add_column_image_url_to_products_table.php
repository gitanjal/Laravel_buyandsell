<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnImageUrlToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        ***ASSIGNMENT***
        Task 1: Are we calling the correct function below (create()!! we simply want to add a column to an existing table)?
          Call the correct fucntion.
        */
        Schema::create('products', function (Blueprint $table) {
            /*
            ***ASSIGNMENT***
            Task 2: Is $db the instance of Blueprint that we have inside this function? Replace with the correct one. 
            */
            $db->string('image_url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->dropColumn('image_url');
        });
    }
}
