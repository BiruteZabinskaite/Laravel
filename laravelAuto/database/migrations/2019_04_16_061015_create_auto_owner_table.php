<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutoOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto_owner', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('auto_id');
            $table->unsignedbigInteger('owner_id');
            $table->timestamp('from_date')->useCurrent();
            $table->timestamp('to_date')->useCurrent();

            $table->timestamps();

            $table->foreign('auto_id')->references('id')
                ->on('autos')
                ->onDelete('cascade');
            $table->foreign('owner_id')->references('id')
                ->on('owners')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auto_owner');
    }
}
