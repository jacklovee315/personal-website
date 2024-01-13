<?php

namespace App\Filament\Resources\PostResource\Traits;

use Illuminate\Contracts\Support\Htmlable;

trait InteractsWithViewPost
{
    public function getBreadcrumb(): string
    {
        return $this->getRecord()->title;
    }

    public function getTitle(): string|Htmlable
    {
        return $this->getRecord()->title;
    }
}
