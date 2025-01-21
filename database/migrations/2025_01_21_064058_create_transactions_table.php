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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->constrained()->onDelete('cascade');
            $table->string('bill_no');
            $table->string('tt_no')->nullable();
            $table->date('payment_date');
            $table->integer('ec_year');
            $table->integer('ec_month');
            $table->integer('ec_day');
            $table->date('ec_date');
            $table->string('month_name');
            $table->integer('queue_no');
            $table->double('amount');
            $table->double('penality')->default(0);
            $table->double('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
