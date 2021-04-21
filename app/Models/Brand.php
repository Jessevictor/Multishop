<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    public function bran(){
        return $this->hasMany(related:'App\Models\Product',foreignKey:'brand_id',localKey:'id');
    }
}
