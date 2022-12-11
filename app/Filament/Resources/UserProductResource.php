<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserProductResource\Pages;
use App\Models\UserProduct;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Model;

class UserProductResource extends Resource
{
    protected static ?string $model = UserProduct::class;

    protected static ?string $navigationIcon = 'heroicon-o-plus';

    protected static ?string $navigationLabel = 'Data Produk Kiriman Pengguna';

            protected static ?string $pluralModelLabel = 'Data Produk Kiriman Pengguna';

    protected static ?int $navigationSort = 5;

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('brand')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('category')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('bpom_id')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('weight')
                    ->required(),
                Forms\Components\TextInput::make('sugar')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('Nama Pengguna'),
                Tables\Columns\TextColumn::make('user.email')->label('Email Pengguna'),
                Tables\Columns\TextColumn::make('name')->searchable()->sortable()->label('Nama Produk')->wrap(),
                Tables\Columns\TextColumn::make('brand')->searchable()->sortable()->label('Brand/Perusahaan')->wrap(),
                Tables\Columns\BadgeColumn::make('category')->label('Kategori')
                    ->enum(['makanan' => 'Makanan', 'minuman' => 'Minuman'])
                    ->colors(['danger' => 'makanan', 'success' => 'minuman'])
                    ->searchable()->sortable(),
                Tables\Columns\TextColumn::make('bpom_id')->label('BPOM ID'),
                Tables\Columns\TextColumn::make('weight')->label('Berat')
                    ->suffix(fn (Model $record): string => " {$record->weight_type}"),
                Tables\Columns\TextColumn::make('sugar')->label('Kandungan Gula')
                    ->suffix(fn (Model $record): string => " {$record->sugar_type}"),
                Tables\Columns\TextColumn::make('created_at')->label('Dibuat Pada')
                    ->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('Terima')
                    ->size('md'),
                Tables\Actions\Action::make('Tolak')
                    ->size('md')->color('danger'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUserProducts::route('/'),
            'create' => Pages\CreateUserProduct::route('/create'),
            'edit' => Pages\EditUserProduct::route('/{record}/edit'),
        ];
    }
}
