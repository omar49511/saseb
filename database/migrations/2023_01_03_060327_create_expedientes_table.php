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
        Schema::create('expedientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_alumno');
            $table->text('motivo_consulta');
            $table->text('descripcion');
            //$table->date('fecha');
            $table->unsignedBigInteger('id_usuario');
            $table->timestamps();
            $table->foreign("id_alumno")
                ->references("id")
                ->on("alumnos")
                ->onDelete("cascade")
                ->onUpdate("cascade");
            $table->foreign("id_usuario")
                ->references("id")
                ->on("users")
                ->onDelete("cascade")
                ->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expedientes');
    }
};
