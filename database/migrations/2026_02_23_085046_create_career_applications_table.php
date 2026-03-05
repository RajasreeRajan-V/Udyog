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
        Schema::create('career_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('career_id')
            ->constrained('careers')
            ->onDelete('cascade');
            $table->string('full_name');
            $table->string('phone_number');
            $table->string('email_address');

            $table->unique(['career_id', 'phone_number']);
            $table->unique(['career_id', 'email_address']);
            
            $table->string('resume');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_applications');
    }
};
