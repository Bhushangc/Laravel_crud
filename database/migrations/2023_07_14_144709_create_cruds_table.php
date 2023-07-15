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
        Schema::create('cruds', function (Blueprint $table) {
            $table->id();
            $table->string('child_first_name');
            $table->string('child_middle_name');
            $table->string('child_last_name');
            $table->integer('child_age');
            $table->string('gender');
            $table->string('child_address');
            $table->string('child_city');
            $table->string('child_state');
            $table->string('country');
            $table->integer('child_zip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cruds');
    }
};
