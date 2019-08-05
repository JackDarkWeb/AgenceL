<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Property extends Model
{
    const HEAT = [
        0 => 'Electric',
        1 => 'Gaz'
    ];

    public $timestamps = true;

    protected $fillable = [
        'title',
        'surface',
        'price',
        'heat',
        'rooms',
        'bedrooms',
        'floor',
        'city',
        'address',
        'postal_code',
        'sold',
        'description',
    ];

    public function getHeatTypeAttribute(){
        return self::HEAT[$this->heat];
    }
    public function getSlugTitleAttribute(){
        return Str::slug($this->title, '-');
    }
    public function getFormattedPriceAttribute():string{
        return number_format($this->price, 0, '', ' ');
    }
}
