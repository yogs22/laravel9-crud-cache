<?php

namespace App\Traits;

use App\Models\Image;
use Illuminate\Support\Facades\DB;

trait WithImage
{
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable')->latest()->withDefault();
    }
}
