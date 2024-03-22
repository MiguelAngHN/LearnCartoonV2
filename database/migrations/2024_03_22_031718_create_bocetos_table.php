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
        Schema::create('bocetos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_boceto');  
            $table->string('url');
            $table->unsignedBigInteger('multimedia_id')->nullable();
            $table->foreign('multimedia_id')->references('id')->on('multimedia')->onDelete('cascade')->onUpdate('cascade');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bocetos');
    }
};
