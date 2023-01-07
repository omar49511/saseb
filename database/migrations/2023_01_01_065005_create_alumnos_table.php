<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("lastname");
            $table->date("birthdate");
            $table->string("group");
            $table->string("shift");
            $table->string("gender");
            $table->string("birthplace");
            $table->string("time_to_reside");
            $table->string("domicile");
            $table->string("home_phone");
            $table->string("cell_phone");
            $table->string("work");
            $table->string("religion");
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
        Schema::dropIfExists('alumnos');
    }
};
