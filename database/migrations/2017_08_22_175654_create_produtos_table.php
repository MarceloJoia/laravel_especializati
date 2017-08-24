<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("produtos", function(Blueprint $table){
            $table->increments("prod_id");
            $table->string("prod_name", 150);
            $table->integer("prod_number");
            $table->boolean("prod_active");
            $table->string("prod_image", 200)->nullable();
            $table->enum("prod_category", ['eletronicos', "moveis", "limpeza", "banho"]);
            $table->text("prod_description");
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
       Schema::drop("produtos");
    }
}
