<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // اسم الجدول (اختياري لو نفس اسم الموديل بالجمع)
    protected $table = 'projects';

    // الحقول اللي مسموح بالكتابة فيها
    protected $fillable = [
        'name',
        'name_f',
        'name_ar',
        'image',
        'dis1',
        'dis1_f',
        'dis1_ar',
        'p_title',
        'p_title_f',
        'p_title_ar',
        'p_link_of_project',
        'p_client_name',
        'p_budget',
        'p_location',
        'p_end_date',
        'p_dis_overview',
        'p_dis_overview_f',
        'p_dis_overview_ar',
        'p_image_overview',
        'p_title2',
        'p_title2_f',
        'p_title2_ar',
        'p_dis2',
        'p_dis2_f',
        'p_dis2_ar',
        'p_points',
        'p_points_f',
        'p_points_ar',
        'p_imags_g_1',
        'p_imags_g_2',
        'p_imags_g_3',
        'p_title3',
        'p_title3_f',
        'p_title3_ar',
        'p_dis3',
        'p_dis3_f',
        'p_dis3_ar',
        'p_points2',
        'p_points2_f',
        'p_points2_ar',
        'image2',
        'p_dis4',
        'p_dis4_f',
        'p_dis4_ar',
        'p_last_title',
        'p_last_title_f',
        'p_last_title_ar',
    ];

    protected $casts = [
        'p_points'   => 'array',
        'p_points_f' => 'array',
        'p_points_ar'=> 'array',
        'p_points2'  => 'array',
        'p_points2_f'=> 'array',
        'p_points2_ar'=> 'array',
        'p_end_date' => 'date',
    ];
}
