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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->enum('category', ['makanan', 'minuman']);
            $table->string('bpom_id');
            $table->float('weight');
            $table->enum('weight_type', ['gram', 'mg', 'liter', 'ml']);
            $table->float('sugar');
            $table->enum('sugar_type', ['gram', 'mg', 'liter', 'ml']);
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
        Schema::dropIfExists('products');
    }
};
