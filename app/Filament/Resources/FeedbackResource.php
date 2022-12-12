<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeedbackResource\Pages;
use App\Models\Feedback;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class FeedbackResource extends Resource
{
    protected static ?string $model = Feedback::class;

    protected static ?string $navigationLabel = 'Saran Perbaikan Data';

    protected static ?string $pluralModelLabel = 'Saran Perbaikan Data';

    protected static ?string $navigationIcon = 'heroicon-o-shield-exclamation';

    protected static ?int $navigationSort = 4;

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit($record): bool
    {
        return false;
    }

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required(),
                Forms\Components\TextInput::make('product_id')
                    ->required(),
                Forms\Components\TextInput::make('feedback')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('Nama Pengirim')->wrap(),
                Tables\Columns\TextColumn::make('user.email')->label('Email Pengirim')->wrap(),
                Tables\Columns\TextColumn::make('product_id')->label('Product ID'),
                Tables\Columns\TextColumn::make('product.name')->label('Nama Produk')->wrap(),
                Tables\Columns\TextColumn::make('feedback')->label('Saran Perbaikan Data')->wrap(),
                Tables\Columns\TextColumn::make('created_at')->label('Dikirim Pada')->wrap()
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('Perbaiki')
                    ->button()
                    ->url(fn ($record) => ProductResource::getUrl('edit', ['record' => $record->product]))
                    ->openUrlInNewTab(),
                Tables\Actions\DeleteAction::make()
                    ->label('Tolak')->button()->icon(false)
                    ->modalHeading('Tolak Saran Perbaikan Data Produk?')->modalButton('Yes')
                    ->modalSubheading('Menolak saran perbaikan data produk akan menghapus data dari tabel ini, yakin untuk melanjutkan?')
                    ->successNotificationTitle('Saran Perbaikan Data Produk Telah Ditolak dan Dihapus Otomatis'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function tableRelation(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('Nama Pengirim')->wrap(),
                Tables\Columns\TextColumn::make('user.email')->label('Email Pengirim')->wrap(),
                Tables\Columns\TextColumn::make('feedback')->label('Saran Perbaikan Data')->wrap(),
                Tables\Columns\TextColumn::make('created_at')->label('Dikirim Pada')->wrap()
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make()
                    ->label('Hapus')->button()->icon(false)
                    ->modalHeading('Hapus Saran Perbaikan Data Produk?')->modalButton('Yes')
                    ->modalSubheading('Ini akan menghapus saran perbaikan data, tetap lanjutkan?')
                    ->successNotificationTitle('Saran Perbaikan Data Produk Telah Dihapus'),
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
            'index' => Pages\ListFeedback::route('/'),
            'create' => Pages\CreateFeedback::route('/create'),
            'edit' => Pages\EditFeedback::route('/{record}/edit'),
        ];
    }
}
