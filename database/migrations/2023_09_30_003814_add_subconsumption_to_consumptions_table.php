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
        Schema::table('consumptions', function (Blueprint $table) {
            $table->bigInteger('subcons_id')->unsigned()->nullable()->default(null);
            $table->foreign('subcons_id')->references('id')->on('subconsumptions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('consumptions', function (Blueprint $table) {
            $table->dropColumn('subcons_id');
        });
    }
};
