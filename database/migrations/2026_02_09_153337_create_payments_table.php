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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            $table->string('control_no')->unique();
            $table->decimal('amount', 15, 2)->nullable();

            $table->enum('status', [
                'PENDING',
                'PAID',
                'FAILED',
                'REVERSED'
            ])->default('PENDING');

            $table->string('payer_name')->nullable();
            $table->string('payer_phone')->nullable();

            $table->timestamp('paid_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
