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
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_id')->unique();
            $table->string('tracking_number')->unique();
            $table->string('customer_name');
            $table->string('delivery_date')->nullable();
            $table->string('sender_email')->unique();
            $table->string('receiver_email')->unique();
            $table->string('receiver_number')->unique();
            $table->string('origin');
            $table->string('destination');
            $table->decimal('weight')->nullable();
            $table->decimal('price')->nullable();
            $table->text('notes')->nullable();
            $table->enum('status', ['Pending', 'In Transit', 'Out for Delivery', 'Delivered'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcels');
    }
};
