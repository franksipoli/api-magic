<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vagas', function (Blueprint $table) {
            $table->increments('id');          
            $table->string('title');
            $table->longText('description');
            $table->string('local');
            $table->enum('remote', ['yes', 'no']);
            $table->integer('type');
            $table->integer('redemagic_id')->unsigned();
            $table->foreign('redemagic_id')
                ->references('id')
                ->on('redemagics')
                ->onDelete('cascade');            
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
        Schema::dropIfExists('vagas');
    }
}
