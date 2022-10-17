<?php

namespace App\Models;

use App\Nova\About_Rooms;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;

class About_Room extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use SortableTrait;
    use HasTranslations;

    public function title()
{
    return $this->roomname;
}

    protected $guarded = ['id'];

    protected $translatable = ['roomname','text'];

    public
    $sortable = [
    'order_column_name' => 'id',
    'sort_when_creating' => true,
];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')->acceptsMimeTypes(['image/png', 'image/jpg', 'image/jpeg']);
        
    }

    public function registerAllMediaConversions(): void
    {
        $this->addMediaConversion('preview')
            ->crop('crop-center', 248, 240);
    }
    public function rooms()
    {
        return $this->belongsTo(Rooms::class,'rooms_id');
    }
}
