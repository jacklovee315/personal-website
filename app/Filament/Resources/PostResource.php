<?php

namespace App\Filament\Resources;

use App\Enums\PostTagEnum;
use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Set;
use Filament\Forms\Components\Grid;
use Illuminate\Support\Str;
use Filament\Forms\Get;

class PostResource extends Resource
{
    protected static ?string $model          = Post::class;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //top grid
                Grid::make()
                    ->schema([
                        Section::make()
                               ->schema([
                                   TextInput::make('title')
                                            ->live(true)
                                            ->afterStateUpdated(function (Set $set, Get $get) {
                                                $set('slug', Str::slug($get('title')));
                                            })
                                            ->required(),
                                   TextInput::make('slug')
                                            ->live()
                                            ->required(),
                                   Toggle::make('visible')
                               ])->columnSpan(2),
                        Section::make()
                               ->schema([
                                   Select::make('tag')
                                         ->required()
                                         ->options(
                                             fn() => collect(PostTagEnum::cases())
                                                 ->mapWithKeys(fn($case) => [$case->value => $case->value])
                                                 ->toArray()
                                         )
                                         ->searchable()
                               ])
                               ->columnSpan(1)
                    ])
                    ->columns(3),

                //bottom grid
                Grid::make()
                    ->schema([
                        Section::make()
                               ->schema([
                                   RichEditor::make('body')
                                             ->required()
                               ])
                    ])
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view'   => Pages\ViewPost::route('/{record}'),
            'edit'   => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
