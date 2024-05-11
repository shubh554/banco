<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    use HasFactory;
    protected $table = 'audience';
    protected $casts = [
        'state' => 'array',
        'city' => 'array',
        'category' => 'array',
        'segment' => 'array',
    ];

    protected $fillable =['name','state','city','category','segement'];
}
