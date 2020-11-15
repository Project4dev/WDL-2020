<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sells', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index();
            $table->string('name',255);
            $table->string('phone',11);
            $table->string('email');
            $table->string('price',20);
            $table->string('housetype',20);
            $table->string('add1',255);
            $table->string('add2',255);
            $table->string('city',35);
            $table->string('state',35);
            $table->string('zip',10); 
            $table->string('ksize',30);
            $table->string('nwash',30);
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->mediumText('image');
            $table->string('purpose',10);  
            $table->softdeletes();
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
        Schema::dropIfExists('sells');
    }
}
