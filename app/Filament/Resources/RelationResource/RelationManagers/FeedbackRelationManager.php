<?php

namespace App\Filament\Resources\RelationResource\RelationManagers;

use App\Filament\Resources\FeedbackResource;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;

class FeedbackRelationManager extends RelationManager
{
    protected static string $relationship = 'feedback';

    protected static ?string $recordTitleAttribute = 'product.name';

    protected static ?string $pluralModelLabel = 'Saran Perbaikan Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('product.name')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return FeedbackResource::tableRelation($table);
    }
}
