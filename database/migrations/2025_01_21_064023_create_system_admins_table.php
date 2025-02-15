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
        Schema::create('system_admins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('microfinance_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('phone_no')->unique()->max(10);
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_admins');
    }
};
