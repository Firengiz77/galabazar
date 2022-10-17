<?php

namespace App\Models;

use App\Models\About_Room;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Menus extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use SortableTrait;
    use HasTranslations;


    protected $guarded = ['id'];
    protected $translatable = ['menuname','title','text'];
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

public function menus()
    {
        return $this->belongsTo(Menus::class);
    }

}
