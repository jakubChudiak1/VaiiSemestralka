<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zoznam extends Model
{
    use HasFactory;
    protected $table = 'zoznams';
    protected $fillable = [
        'image',
        'name',
        'date',
        'count',
    ];
}
