<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockChartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_charts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ticker_symbol')->nullable();
            $table->string('chart_type')->nullable();
            $table->string('compare_with')->nullable();
            $table->string('price_band')->nullable();
            $table->string('time_period')->nullable();
            $table->string('moving_average')->nullable();
            $table->string('moving_average_number')->nullable();
            $table->string('moving_average2')->nullable();
            $table->string('moving_average_number2')->nullable();
            $table->string('chart_size')->nullable();
            $table->string('show_volume_bars')->nullable();
            $table->string('parabolic_sar')->nullable();
            $table->string('log_scale')->nullable();
            $table->string('percentage_scale')->nullable();
            $table->string('technical_indicators1')->nullable();
            $table->string('technical_indicators2')->nullable();
            $table->string('technical_indicators3')->nullable();
            $table->string('technical_indicators4')->nullable();
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
        Schema::dropIfExists('stock_charts');
    }
}
