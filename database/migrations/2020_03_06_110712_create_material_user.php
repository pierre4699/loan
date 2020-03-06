<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_user', function(Blueprint $table) {
            $table -> increments('id');
            $table -> integer('material_id') -> unsigned() -> index();
            $table -> foreign('material_id') -> references('id') -> on('materials') -> onDelete('cascade');
            $table -> integer('user_id') -> unsigned() -> index();
            $table -> foreign('user_id') -> references('id') -> on('users') -> onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_user');
    }
}
