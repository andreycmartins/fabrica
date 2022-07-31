<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFabricacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fabricacao', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->integer('portas')->default('4');
            $table->string('litragem', 32);
            $table->enum('tipo_veiculo', ['Hatch','Sedan', 'SUV', 'Coupe', 'Minivan', 'Conversível', 'Pickup', 'Wagon', 'Van']);
            $table->enum('tipo_motor', ['Aspirado', 'Turbo']);
            $table->enum('tipo_rodas', ['Ferro', 'Liga-Leve']);
            $table->string('cor', 32);
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
        Schema::dropIfExists('fabricacao');
    }
}
