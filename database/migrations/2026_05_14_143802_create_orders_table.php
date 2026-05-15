<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Constraint\Constraint;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId("clients_id")->constrained("clients")->onDelete("cascade");
            $table->dateTime("order_date");
            $table->decimal("total_amount", 10,2);
            $table->string("status");
            $table->string("payment_method");
            $table->string("shipping_address");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
