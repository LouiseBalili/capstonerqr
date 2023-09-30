<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subconsumptions', function (Blueprint $table) {
            $table->id();
            $table->integer('qtyConsumed');
            $table->string('dateConsumed');
            $table->bigInteger('cons_id')->unsigned();
            $table->timestamps();
            $table->foreign('cons_id')->references('id')->on('consumptions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subconsumptions');
    }
};
