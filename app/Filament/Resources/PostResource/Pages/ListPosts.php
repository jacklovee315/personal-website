<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->icon('heroicon-o-document-text'),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                          ->searchable(),
                TextColumn::make('tag')
                          ->badge()
                          ->color('gray'),
                TextColumn::make('visible')
                          ->badge()
                          ->color(fn(string $state): string => match ($state) {
                              '0' => 'danger',
                              '1' => 'success',
                          })
                          ->formatStateUsing(fn(string $state): string => $state ? 'Yes' : 'No')
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    EditAction::make()->color('warning'),
                    DeleteAction::make()->color('danger'),
                ])
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->recordUrl(
                fn(Model $record): string => route('filament.admin.resources.posts.view', ['record' => $record]),
            );
    }
}
