<?php

namespace App\Models;

use App\Models\Menus;
use App\Nova\About_Rooms;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Dish extends Model  implements HasMedia
{   
     use HasFactory;
    use InteractsWithMedia;
    use SortableTrait;
    use HasTranslations;

    public function title()
{
    return $this->menuname;
}

protected $guarded = ['id'];

protected $translatable = ['menuname','dishes','meal','ingredient'];

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

public function menus()
{
    return $this->belongsTo(Menus::class,'menuses_id');
}





}


