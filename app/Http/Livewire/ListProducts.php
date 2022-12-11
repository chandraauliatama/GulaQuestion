<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Closure;
use Filament\Tables\Columns;
use Filament\Tables\Columns\Layout\Split;
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
            Columns\TextColumn::make('name')->sortable()->searchable(),
            Columns\BadgeColumn::make('category')
                ->enum(['makanan' => 'Makanan', 'minuman' => 'Minuman'])
                ->colors(['danger' => 'makanan', 'success' => 'minuman'])
                ->searchable()->sortable(),
            Columns\TextColumn::make('brand')->searchable()->sortable()->prefix('Produksi: '),
            Columns\TextColumn::make('bpom_id')->label('BPOM ID')->prefix('BPOM ID: '),
            Columns\TextColumn::make('weight')->suffix(function (Model $record): string {
                return $record->category == 'makanan' ? ' gram' : ' liter';
            }),
            Columns\TextColumn::make('sugar')->suffix(' mg'),
            //  ]),
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
