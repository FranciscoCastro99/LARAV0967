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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre',45);
            $table->string('Apellido',45);
            $table->string('Nombre Completo',64);
            //$table->text('biografia'); -> esto se usa para un texto largo
            $table->string('Dirección',45);
            $table->string('Ciudad',45);
            $table->string('Estado',45);
            //creamos el campor para albergar la llave foranea
            $table->unsignedBigInteger('coche_id')->unique();

            $table->foreign('coche_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
