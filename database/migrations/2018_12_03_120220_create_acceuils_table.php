<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcceuilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acceuils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bande');
            $table->string('title');
            $table->string('contenue');
            $table->string('image')->nullable();
            $table->string('link')->nullable();
            $table->integer('version');
            $table->string('update_by', 20)->nullable();
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
        Schema::dropIfExists('acceuils');
    }
}
