<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('service_views', function (Blueprint $table) {
            $table->integer('start_followers')->nullable();
            $table->integer('end_followers')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('service_views', function (Blueprint $table) {
            $table->dropColumn(['start_followers', 'end_followers']);
        });
    }
};
