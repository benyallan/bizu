<?php

namespace App\Filament\Resources\App\Domains\TrafficEnforcement\Models\TrafficEnforcementArticleResource\Pages;

use App\Filament\Resources\App\Domains\TrafficEnforcement\Models\TrafficEnforcementArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTrafficEnforcementArticles extends ListRecords
{
    protected static string $resource = TrafficEnforcementArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
