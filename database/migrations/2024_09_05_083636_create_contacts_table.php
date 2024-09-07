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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key

            $table->string('name', 100); // Name with a max length of 100 characters
            $table->string('phone_number'); // Phone number field (no length limit specified)
            $table->string('email')->nullable(); // Email field, can be null
            $table->text('address')->nullable(); // Address field, can be null, uses 'text' for longer entries

            $table->timestamps(); // Adds created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
