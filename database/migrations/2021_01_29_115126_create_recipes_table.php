<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('slug');
            $table->boolean('is_visible')->default(1);
            $table->text('preparation');
            $table->string('duration');
            $table->unsignedBigInteger('recipe_category_id');

            $table->foreign('recipe_category_id')
                ->references('id')
                ->on('recipe_categories')
                ->cascadeOnDelete()
            ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
