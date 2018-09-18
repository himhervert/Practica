<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagens', function (Blueprint $table) {
            $table->increments('id');
            //Foreign Key
            $table->integer('user_id')->unsigned();
            // Content Column 
            $table->text('nombre');
            $table->enum('tipo',['.PNG','.JPG']);
            $table->float('tam_imagen');
            $table->integer('tiempo');
            $table->timestamp('fecha_inicio');
            $table->timestamp('fecha_fin');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('imagens',function(Blueprint $table){
            $table->dropForeign('imagens_user_id_foreign');
        });

        Schema::dropIfExists('imagens');
    }
}
