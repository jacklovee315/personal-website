<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Filament\Resources\PostResource\Traits\InteractsWithViewPost;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\TextEntry\TextEntrySize;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;
use Filament\Support\Enums\FontWeight;

class ViewPost extends ViewRecord
{
    use InteractsWithViewPost;

    protected static string $resource = PostResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                //top grid
                Grid::make()
                    ->schema([
                        Section::make()
                               ->schema([
                                   TextEntry::make('title')
                                            ->weight(FontWeight::Bold)
                                            ->size(TextEntrySize::Large),
                                   TextEntry::make('slug'),
                                   TextEntry::make('visible')
                                            ->badge()
                                            ->color(fn(string $state): string => match ($state) {
                                                '0' => 'danger',
                                                '1' => 'success',
                                            })
                                            ->formatStateUsing(fn(string $state): string => $state ? 'Yes' : 'No')
                               ])->columnSpan(2),

                        Section::make()
                               ->schema([
                                   TextEntry::make('tag')
                                            ->badge()
                                            ->color('gray'),
                                   TextEntry::make('created_at')
                                            ->date('jS F Y'),
                               ])->columnSpan(1)
                    ])->columns(3),

                //bottom grid
                Grid::make()
                    ->schema([
                        Section::make()
                               ->schema([
                                   TextEntry::make('body')
                                            ->markdown(),
                               ])
                    ])
            ]);
    }

    protected function getHeaderActions(): array
    {
        return [
            ActionGroup::make([
                EditAction::make()
                          ->color('warning')
                          ->icon('heroicon-m-pencil-square'),
                DeleteAction::make()
                            ->icon('heroicon-o-trash')
            ])->color('primary')
        ];
    }
}
