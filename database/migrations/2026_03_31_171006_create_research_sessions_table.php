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
        Schema::create('research_sessions', function (Blueprint $table) {
            $table->id();
            $table->string('session_code')->unique();
            $table->string('client_initials', 10);
            $table->string('client_name');
            $table->string('duration');
            $table->integer('avg_focus_score');
            $table->string('status');
            $table->boolean('is_alert')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('research_sessions');
    }
};
