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
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('growth_cycle');
            $table->string('category');
            $table->string('location');
            $table->decimal('price', 8, 2);
            $table->integer('volume');
            $table->string('availability');
            $table->boolean('deleted')->default(false);
            $table->text('description');
            $table->json('benefits');
            $table->string('emoji');
            $table->string('gradient');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plants');
    }
};
