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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_f');
            $table->string('name_ar');
            $table->string('image')->nullable();
            $table->string('dis1');
            $table->string('dis1_f');
            $table->string('dis1_ar');
            $table->string('p_title')->nullable();
            $table->string('p_title_f')->nullable();
            $table->string('p_title_ar')->nullable();
            $table->string('p_link_of_project')->nullable();
            $table->string('p_client_name')->nullable();
            $table->string('p_budget')->nullable();
            $table->string('p_location')->nullable();
            $table->date('p_end_date')->nullable();
            $table->longText('p_dis_overview')->nullable();
            $table->longText('p_dis_overview_f')->nullable();
            $table->longText('p_dis_overview_ar')->nullable();
            $table->string('p_image_overview')->nullable();
            $table->string('p_title2')->nullable();
            $table->string('p_title2_f')->nullable();
            $table->string('p_title2_ar')->nullable();
            $table->string('p_dis2')->nullable();  
            $table->string('p_dis2_f')->nullable();  
            $table->string('p_dis2_ar')->nullable();  
            $table->json('p_points')->nullable();
            $table->json('p_points_f')->nullable();
            $table->json('p_points_ar')->nullable();
            $table->string('p_imags_g_1')->nullable();
            $table->string('p_imags_g_2')->nullable();
            $table->string('p_imags_g_3')->nullable();
            $table->string('p_title3')->nullable();
            $table->string('p_title3_f')->nullable();
            $table->string('p_title3_ar')->nullable();
            $table->string('p_dis3')->nullable(); 
            $table->string('p_dis3_f')->nullable(); 
            $table->string('p_dis3_ar')->nullable(); 
            $table->json('p_points2')->nullable();
            $table->json('p_points2_f')->nullable();
            $table->json('p_points2_ar')->nullable();
            $table->string('image2')->nullable();
            $table->string('p_dis4')->nullable();
            $table->string('p_dis4_f')->nullable();
            $table->string('p_dis4_ar')->nullable();
            $table->string('p_last_title')->nullable();
            $table->string('p_last_title_f')->nullable();
            $table->string('p_last_title_ar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
