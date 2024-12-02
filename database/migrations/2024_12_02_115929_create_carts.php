<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id',11);

            $table->unsignedInteger('selling_master_id');
            $table->foreign("selling_master_id")->references('id')->on("selling_masters");
            
            $table->unsignedInteger('catalog_id');
            $table->foreign("catalog_id")->references('id')->on("catalogs");
            
            $table->double('purchase_price')->nullable();
            $table->double('selling_price')->nullable();
            $table->double('qty')->nullable();
            $table->double('discount')->nullable();
            $table->double('total')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign("user_id")->references('id')->on("users");

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
        Schema::dropIfExists('carts');
    }
}
