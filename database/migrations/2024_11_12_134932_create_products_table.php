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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('category_id')->constrained('categories', 'id')->cascadeOnDelete() ;
            $table->foreignId('category_id')->nullable()->constrained('categories', 'id')->nullOnDelete() ;
            $table->string('sku')->unique();
            $table->string('name');
            $table->decimal('price', 8,2);
            $table->integer('stock')->default(0);
            $table->string('color', 19);
            $table->string('image');
            $table->longText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
