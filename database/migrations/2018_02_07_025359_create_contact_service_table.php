<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_service', function (Blueprint $table) {
            $table->integer('contact_id')->unsigned()->nullable();
            $table->integer('service_id')->unsigned()->nullable();

            $table->foreign('contact_id')->references('id')
                ->on('contact')
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
        Schema::dropIfExists('contact_service');
    }
}
