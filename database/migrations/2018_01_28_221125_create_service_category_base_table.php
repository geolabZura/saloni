<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceCategoryBaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_category_base', function (Blueprint $table) {

            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('service_id')->unsigned()->nullable();

            $table->foreign('category_id')->references('id')
                ->on('service_category')
                ->onDelete('cascade');

            $table->foreign('service_id')->references('id')
                ->on('service')
                ->onDelete('cascade');

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
        Schema::dropIfExists('service_category_base');
    }
}
