<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Filament\Resources\PostResource\Traits\InteractsWithViewPost;
use Filament\Resources\Pages\EditRecord;

class EditPost extends EditRecord
{
    use InteractsWithViewPost;

    protected static string $resource = PostResource::class;
}
