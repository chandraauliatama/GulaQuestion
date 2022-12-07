<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Closure;
use Filament\Tables\Columns;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class ListProducts extends Component implements HasTable
{
    use InteractsWithTable;

    protected function getTableQuery(): Builder
    {
        return Product::query();
    }

    protected function getTableColumns(): array
    {
        return [
            Columns\TextColumn::make('name')->sortable()->searchable(),
            Columns\TextColumn::make('brand')->searchable()->sortable(),
            Columns\BadgeColumn::make('category')
                ->enum(['makanan' => 'Makanan', 'minuman' => 'Minuman'])
                ->colors(['danger' => 'makanan', 'success' => 'minuman'])
                ->searchable()->sortable(),
            Columns\TextColumn::make('bpom_id')->label('BPOM ID'),
            Columns\TextColumn::make('weight'),
            Columns\TextColumn::make('sugar'),
        ];
    }

    protected function getTableRecordUrlUsing(): Closure
    {
        return fn (Model $record): string => route('product.show', ['product' => $record]);
    }

    public function render()
    {
        return view('livewire.list-products');
    }
}
