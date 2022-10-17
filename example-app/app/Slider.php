<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use TCG\Voyager\Traits\Translatable;

class Slider extends Model
{
    use HasFactory;
    use Translatable;

    protected $fillable =['image','text','link'];

    protected $translatable = ['text'];

    public function getImageUrlAttribute()
    {
        return $this->images()->value('image');
    }
}
