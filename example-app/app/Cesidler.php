<?php

namespace App;

use App\Mehsullar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Cesidler extends Model
{
    use HasFactory;
    use Translatable;
    
    protected $table = "cesidlers";

    protected $fillable     =   [
        'mehsul_id',
        'ad',
        'faydasi',
        'istifadesi',
        'image'
    ];
    protected $translatable = ['ad','faydasi', 'istifadesi'];

    // public function mehsullar(){
    //     return $this->belongsTo(Mehsullar::class,);
    // }
    public function getImageUrlAttribute()
    {
        return $this->images()->value('image');
    }

}
