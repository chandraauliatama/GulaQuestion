<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Closure;
use Filament\Tables\Columns;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class ListProducts extends Component implements HasTable
{
    use InteractsWithTable;

    protected $listeners = ['qrcode'];

    public function qrcode($value)
    {
        $this->fill(['tableSearchQuery' => $value]);
    }

    protected function getTableQuery(): Builder
    {
        return Product::query();
    }

    protected function getTableContentGrid(): ?array
    {
        return [
            'md' => 2,
            'xl' => 4,
        ];
    }

    protected function getTableColumns(): array
    {
        return [
            // Split::make([
            Columns\TextColumn::make('name')->sortable()->searchable()->label('Nama Produk'),
            Columns\BadgeColumn::make('category')->label('Kategori')
                ->enum(['makanan' => 'Makanan', 'minuman' => 'Minuman'])
                ->colors(['danger' => 'makanan', 'success' => 'minuman'])
                ->searchable()->sortable(),
            Columns\TextColumn::make('brand')->searchable()->sortable()
                ->prefix('Produksi: ')->label('Brand/Perusahaan'),
            Columns\TextColumn::make('bpom_id')
                ->label('BPOM ID')->prefix('BPOM ID: ')->searchable(),
            Columns\TextColumn::make('weight')
                ->prefix('Berat Produk: ')
                ->suffix(fn ($record) => " $record->weight_type"),
            Columns\TextColumn::make('sugar')->suffix(fn ($record) => " $record->sugar_type"),
            //  ]),
        ];
    }

    protected function getTableRecordsPerPageSelectOptions(): array
    {
        return [12, 24, 36, 48, 60];
    }

    protected function getTableRecordUrlUsing(): Closure
    {
        return fn ($record): string => route('product.show', ['product' => $record]);
    }

    public function render()
    {
        return view('livewire.list-products');
    }
}
