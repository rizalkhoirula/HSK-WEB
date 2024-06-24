<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    protected $fillable = [
        'name'
    ];

    public function data()
    {
        return $this->hasMany(Data::class, 'id_kategori', 'id');
    }
}
