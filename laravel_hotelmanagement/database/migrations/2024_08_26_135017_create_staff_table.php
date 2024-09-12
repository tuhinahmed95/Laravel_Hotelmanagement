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
        Schema::create('staff', function (Blueprint $table) {
            $table->id(); // Primary Key: staff ID
            $table->string('name'); // Staff Name
            $table->string('email')->unique(); // Staff Email (Unique)
            $table->string('position'); // Job Position
            $table->string('department'); // Department Name
            $table->decimal('salary', 8, 2); // Salary with 8 digits in total and 2 after the decimal
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
