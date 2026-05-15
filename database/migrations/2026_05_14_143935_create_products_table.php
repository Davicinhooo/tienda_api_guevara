<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId("Categories_id")->constrained("Categories")->onDelete("cascade");
            $table->foreignId("Orders_id")->constrained("Orders")->onDelete("cascade");
            $table->string("name");
            $table->text("description")->nullable();
            $table->decimal("price", 10,2);
            $table->unsignedInteger("stock");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
