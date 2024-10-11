<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->integer('stock')->nullable();
            $table->string('category')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });        
    }
}
