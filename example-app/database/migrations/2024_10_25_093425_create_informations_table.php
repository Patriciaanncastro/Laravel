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
        Schema::create('informations', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Contact');
            $table->string('Email');
            $table->longtext('Objectives');
            $table->string('Address');
            $table->longtext('Skills');
            $table->longtext('Certification');
            $table->longtext('Education');
            $table->longtext('Experience');
            $table->longtext('Character References');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informations');
    }
};
