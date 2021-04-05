<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJoinReserchGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('join_reserch_groups', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')
                ->on('users')->cascadeOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('research_group_id')->nullable();
            $table->foreign('research_group_id')->references('id')
                ->on('research_groups')->cascadeOnDelete()->cascadeOnUpdate();

            $table->boolean('active')->default(0);

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
        Schema::dropIfExists('join_reserch_groups');
    }
}
