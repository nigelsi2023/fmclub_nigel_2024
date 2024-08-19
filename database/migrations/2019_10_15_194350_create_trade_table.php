<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('product_id');
            $table->string('date');
            $table->string('quantity');
            $table->string('price');
            $table->string('total_cost');
            $table->string('profit_loss')->nullable();
            $table->timestamps();
        });
        
        
        Schema::create('trader_blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('trader_category_id')->nullable();
            $table->string('name')->nullable();
            $table->text('sub_title')->nullable();
            $table->string('page_url');
            $table->longText('detail')->nullable();
            $table->string('image')->nullable();
            $table->string('videoLink')->nullable();
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
        Schema::dropIfExists('trades');
    }
}
