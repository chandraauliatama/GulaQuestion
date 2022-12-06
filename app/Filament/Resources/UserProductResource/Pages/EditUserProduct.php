<?php

namespace App\Filament\Resources\UserProductResource\Pages;

use App\Filament\Resources\UserProductResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserProduct extends EditRecord
{
    protected static string $resource = UserProductResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
