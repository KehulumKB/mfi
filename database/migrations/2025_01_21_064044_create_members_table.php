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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('microfinance_id')->constrained()->onDelete('cascade');
            $table->string('member_name');
            $table->integer('age');
            $table->string('sex');
            $table->string('phone_no')->unique()->max(10);
            $table->string('address')->nullable();
            $table->string('bill_no')->unique();
            $table->string('status')->default(0);
            $table->foreignId('system_admin_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
