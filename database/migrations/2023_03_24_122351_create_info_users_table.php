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
        Schema::create('info_users', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_service');
            $table->integer('id_city');
            $table->text('address');
            $table->string('experience');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_users');
    }
};
