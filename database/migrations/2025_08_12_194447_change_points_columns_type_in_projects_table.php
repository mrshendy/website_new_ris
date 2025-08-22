<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // استخدم change() لتعديل نوع العمود
            $table->json('p_points')->nullable()->change();
            $table->json('p_points_f')->nullable()->change();
            $table->json('p_points_ar')->nullable()->change();
            $table->json('p_points2')->nullable()->change();
            $table->json('p_points2_f')->nullable()->change();
            $table->json('p_points2_ar')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            //
        });
    }
};
