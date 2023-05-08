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
        Schema::create('sub_committees', function (Blueprint $table) {
            $table->id();
            $table->integer('tc_id');
            $table->string('sub_committee');
            $table->longText('abstract');
            $table->double('price');
            $table->string('path');
            $table->char('status',1)->default('Y');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_committees');
    }
};
