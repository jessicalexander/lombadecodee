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
        Schema::create('newsletter', function (Blueprint $table) {
            $table -> id();
            $table -> text('email');
            $table->timestamps();
        });

        Schema::create('members', function (Blueprint $table) {
            $table -> id();
            $table -> text('name');
            $table -> text('email');
            $table -> integer('phone');
            $table -> text('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};