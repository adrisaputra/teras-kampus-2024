<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('monographs', function (Blueprint $table) {
            $table->increments('id',11);
            $table->string('category')->nullable();
            $table->string('title')->nullable();
            $table->string('author')->nullable();
            $table->date('publication_date')->nullable();
            $table->text('desc')->nullable();
            $table->string('cover')->nullable();
            $table->string('file')->nullable();
            $table->integer('count_view')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign("user_id")->references('id')->on("users");
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monographs');
    }
};
