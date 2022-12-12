<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RelationResource\RelationManagers\FeedbackRelationManager;
use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationLabel = 'Data Produk';

    protected static ?string $pluralModelLabel = 'Produk';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->label('Nama Produk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('brand')->label('Brand/Perusahaan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('category')->label('Kategori')
                    ->options(['makanan' => 'Makanan', 'minuman' => 'Minuman'])
                    ->required(),
                Forms\Components\TextInput::make('bpom_id')->label('BPOM ID')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('weight')->label('Berat')
                    ->required(),
                Forms\Components\Select::make('weight_type')->label('Satuan Berat')
                    ->options(['gram' => 'gram', 'mg' => 'mg', 'liter' => 'liter', 'ml' => 'ml'])
                    ->required(),
                Forms\Components\TextInput::make('sugar')->label('Kandungan Gula')
                    ->required(),
                Forms\Components\Select::make('sugar_type')->label('Satuan Gula')
                    ->options(['gram' => 'gram', 'mg' => 'mg', 'liter' => 'liter', 'ml' => 'ml'])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable()->label('Nama Produk'),
                Tables\Columns\TextColumn::make('brand')->searchable()->sortable()->label('Brand/Perusahaan'),
                Tables\Columns\BadgeColumn::make('category')->label('Kategori')
                    ->enum(['makanan' => 'Makanan', 'minuman' => 'Minuman'])
                    ->colors(['danger' => 'makanan', 'success' => 'minuman'])
                    ->searchable()->sortable(),
                Tables\Columns\TextColumn::make('bpom_id')->label('BPOM ID'),
                Tables\Columns\TextColumn::make('weight')->label('Berat')
                    ->suffix(fn ($record): string => " {$record->weight_type}"),
                Tables\Columns\TextColumn::make('sugar')->label('Kandungan Gula')
                    ->suffix(fn ($record): string => " {$record->sugar_type}"),
                Tables\Columns\TextColumn::make('created_at')->label('Dibuat Pada')
                    ->date(),
                Tables\Columns\TextColumn::make('updated_at')->label('Diubah Pada')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Ubah'),
                Tables\Actions\DeleteAction::make()->label('Hapus'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            FeedbackRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
