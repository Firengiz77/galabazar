<?php

namespace App;

use App\Cesidler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Mehsullar extends Model
{
    use HasFactory;
    use Translatable;
    
    protected $table = "mehsullars";

    protected $guarded = ['id'];
    protected $fillable     =   ['name'];
    protected $translatable = ['name'];

    public function cesidler()
    {
        return $this->hasMany(Cesidler::class,'mehsul_id','id');
    }
    
    public function getImageUrlAttribute()
    {
        return $this->images()->value('image');
    }



}
