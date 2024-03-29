<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRedemagicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redemagics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('email', 60);
            $table->string('website');
            $table->string('logo');
            $table->string('password', 64);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('redemagics');
    }
}
