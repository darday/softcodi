<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiftSoftcodisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gift_softcodis', function (Blueprint $table) {
            $table->id('gift_id');
            $table->date('draw_date')->nullable();
            $table->string('gift_name')->nullable();     
            $table->string('gift_description')->nullable();     
            $table->string('img_gift_draw')->nullable();     
            $table->string('gift_winner')->nullable();     
            $table->string('name_gift_last_draw')->nullable();     
            $table->string('img_gift_winner')->nullable();     
            $table->boolean('claim_gift')->nullable();     
            $table->date('date_claim_gift')->nullable();     

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
        Schema::dropIfExists('gift_softcodis');
    }
}
