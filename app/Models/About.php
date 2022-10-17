<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;

class About extends Model implements HasMedia
{
         
    use HasFactory;
    use InteractsWithMedia;
    use SortableTrait;
    use HasTranslations;
    
    protected $guarded = ['id'];

    protected $translatable = ['text'];

    public
    $sortable = [
    'order_column_name' => 'id',
    'sort_when_creating' => true,
];

public function registerMediaCollections(Media $media = null): void
{
    
    $this->addMediaCollection('image')->singleFile()->acceptsMimeTypes(['image/png', 'image/jpg', 'image/jpeg']);
}


public function registerAllMediaConversions(Media $media = null): void
{
    $this->addMediaConversion('preview')
        ->crop('crop-center', 248, 240);
}
}
