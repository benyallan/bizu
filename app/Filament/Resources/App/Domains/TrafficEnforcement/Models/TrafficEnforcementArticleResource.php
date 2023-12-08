<?php

namespace App\Filament\Resources\App\Domains\TrafficEnforcement\Models;

use App\Filament\Resources\App\Domains\TrafficEnforcement\Models\TrafficEnforcementArticleResource\Pages;
use App\Filament\Resources\App\Domains\TrafficEnforcement\Models\TrafficEnforcementArticleResource\RelationManagers;
use App\Domains\TrafficEnforcement\Models\TrafficEnforcementArticle;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TrafficEnforcementArticleResource extends Resource
{
    protected static ?string $model = TrafficEnforcementArticle::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('code'),
                TextInput::make('description')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('code'),
                TextColumn::make('description')
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->requiresConfirmation(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
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
            'index' => Pages\ListTrafficEnforcementArticles::route('/'),
            'create' => Pages\CreateTrafficEnforcementArticle::route('/create'),
            'view' => Pages\ViewTrafficEnforcementArticle::route('/{record}'),
            'edit' => Pages\EditTrafficEnforcementArticle::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
