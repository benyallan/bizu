<?php

namespace App\Filament\Resources\App\Domains\TrafficEnforcement\Models\TrafficEnforcementArticleResource\Pages;

use App\Filament\Resources\App\Domains\TrafficEnforcement\Models\TrafficEnforcementArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTrafficEnforcementArticle extends EditRecord
{
    protected static string $resource = TrafficEnforcementArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
