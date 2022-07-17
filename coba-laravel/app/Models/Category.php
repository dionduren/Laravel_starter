<?php

namespace App\Models;

use App\Models\Data;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    // protected $fillable = ['name', 'slug'];
    protected $guarded = ['id'];

    public function data()
    {
        return $this->hasMany(Data::class);
    }
}
