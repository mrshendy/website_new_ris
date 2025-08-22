<?php

namespace App\Filament\Resources;

use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\ProjectResource\Pages;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';
    protected static ?string $activeNavigationIcon = 'heroicon-s-shopping-bag';
    protected static ?string $navigationGroup = 'Projects';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')->required(),
            TextInput::make('name_f'),
            TextInput::make('name_ar'),
            FileUpload::make('image')->image()->directory('projects'),

            TextInput::make('dis1'),
            TextInput::make('dis1_f'),
            TextInput::make('dis1_ar'),

            TextInput::make('p_title'),
            TextInput::make('p_title_f'),
            TextInput::make('p_title_ar'),
            TextInput::make('p_link_of_project'),
            TextInput::make('p_client_name'),
            TextInput::make('p_budget'),
            TextInput::make('p_location'),
            Forms\Components\DatePicker::make('p_end_date'),

            Textarea::make('p_dis_overview'),
            Textarea::make('p_dis_overview_f'),
            Textarea::make('p_dis_overview_ar'),
            FileUpload::make('p_image_overview')->image()->directory('projects'),

            TextInput::make('p_title2'),
            TextInput::make('p_title2_f'),
            TextInput::make('p_title2_ar'),

            Textarea::make('p_dis2'),
            Textarea::make('p_dis2_f'),
            Textarea::make('p_dis2_ar'),
            
            Repeater::make('p_points')->schema([
                TextInput::make('p_points_en')->required(),
                TextInput::make('p_points_f')->required(),
                TextInput::make('p_points_ar')->required(),

            ])->columnSpanFull()->columns('3')->label('Points in the Project Page'),


            FileUpload::make('p_imags_g_1')->image()->directory('projects'),
            FileUpload::make('p_imags_g_2')->image()->directory('projects'),
            FileUpload::make('p_imags_g_3')->image()->directory('projects'),

            TextInput::make('p_title3'),
            TextInput::make('p_title3_f'),
            TextInput::make('p_title3_ar'),
                
            Textarea::make('p_dis3'),
            Textarea::make('p_dis3_f'),
            Textarea::make('p_dis3_ar'),
            Repeater::make('p_points2')->schema([
                TextInput::make('p_points2_en')->required(),
                TextInput::make('p_points2_f')->required(),
                TextInput::make('p_points2_ar')->required(),
            ])->columnSpanFull()->columns('3')->label('Points in the Project Page'),

            FileUpload::make('image2')->image()->directory('projects'),

            Textarea::make('p_dis4'),
            Textarea::make('p_dis4_f'),
            Textarea::make('p_dis4_ar'),

            TextInput::make('p_last_title'),
            TextInput::make('p_last_title_f'),
            TextInput::make('p_last_title_ar'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('id')->sortable(),
            TextColumn::make('name')->searchable(),
            ImageColumn::make('image'),
            TextColumn::make('p_client_name'),
            TextColumn::make('p_budget'),
            TextColumn::make('p_location'),
            TextColumn::make('p_end_date')->date(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
