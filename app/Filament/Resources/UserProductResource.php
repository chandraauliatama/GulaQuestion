<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserProductResource\Pages;
use App\Models\Product;
use App\Models\UserProduct;
use Filament\Forms;
use Filament\Forms\Components\Wizard;
use Filament\Notifications\Notification;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

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

    public static function canEdit($record): bool
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
                    ->suffix(fn ($record): string => " {$record->weight_type}"),
                Tables\Columns\TextColumn::make('sugar')->label('Kandungan Gula')
                    ->suffix(fn ($record): string => " {$record->sugar_type}"),
                Tables\Columns\TextColumn::make('created_at')->label('Dibuat Pada')
                    ->date(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make()
                    ->label('Tolak')->button()->icon(false)
                    ->modalHeading('Tolak Data Produk?')->modalButton('Yes')
                    ->modalSubheading('Menolak data produk akan menghapus data dari tabel ini, yakin untuk melanjutkan?')
                    ->successNotificationTitle('Data Produk Telah Ditolak dan Dihapus Otomatis'),

                Tables\Actions\Action::make('Terima')
                    ->button()->icon(false)
                    ->mountUsing(fn (Forms\ComponentContainer $form, UserProduct $record) => $form->fill([
                        'sender' => $record->user->name,
                        'sender_email' => $record->user->email,
                        'name' => $record->name,
                        'brand' => $record->brand,
                        'category' => $record->category,
                        'bpom_id' => $record->bpom_id,
                        'weight' => $record->weight,
                        'weight_type' => $record->weight_type,
                        'sugar' => $record->sugar,
                        'sugar_type' => $record->sugar_type
                    ]))
                    ->action(function (UserProduct $record, array $data): void {
                        Product::create($data);
                        $record->delete();
                        Notification::make()->title('Data Produk Kiriman Pengguna Telah Dimasukan Ke Data Produk')->success()->send();
                    })
                    ->form([
                        Wizard::make([
                            Wizard\Step::make('Informasi Pengirim')->schema([
                                Forms\Components\TextInput::make('sender')->label('Nama Pengirm')->disabled(),
                                Forms\Components\TextInput::make('sender_email')->label('Email Pengirim')->disabled(),
                            ]),
                            Wizard\Step::make('Informasi Produk')->schema([
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
                                    ->maxLength(60),
                            ]),
                            Wizard\Step::make('Informasi Gula')->schema([
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
                            ])
                        ]),
                    ])
                    ->modalButton('Masukkan Data')
                    ->modalSubheading('Setelah data dimasukan ke data produk, data pada tabel ini akan dihapus.')
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
