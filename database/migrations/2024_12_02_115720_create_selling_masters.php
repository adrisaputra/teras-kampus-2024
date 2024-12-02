<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellingMasters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selling_masters', function (Blueprint $table) {
            $table->increments('id',11);
            $table->string('transaction_number')->nullable();
            $table->enum('status',['CART','DONE'])->nullable();
            $table->enum('method',['Tunai','Transfer','Kredit'])->nullable();
            $table->string('credit_number')->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->double('pay_cost')->nullable();
            $table->double('total_price')->nullable();

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
        Schema::dropIfExists('selling_masters');
    }
}
