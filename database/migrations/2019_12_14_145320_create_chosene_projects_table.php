<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChoseneProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chosene_projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->index('user_id');
            $table->bigInteger('project_id');
            $table->index('project_id');
            $table->string('newprice');
            $table->string('dateline');
            $table->string('stages');
            $table->bigInteger('contract_id');
            $table->index('contract_id');
            $table->bigInteger('payment_id');
            $table->index('payment_id');
            $table->boolean('Chosene_is_done');
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
        Schema::dropIfExists('chosene_projects');
    }
}
