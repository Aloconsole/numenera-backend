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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('background');
            $table->string('type');

            //STATS
            $table->unsignedInteger('tier');
            $table->unsignedInteger('might_pool');
            $table->unsignedInteger('speed_pool');
            $table->unsignedInteger('intellect_pool');
            //STATS

            // CHIAVI
            $table->foreignId('descriptor_id')->constrained();
            $table->foreignId('focus_id')->constrained();
            $table->foreignId('campaign_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
