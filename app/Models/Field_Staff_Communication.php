<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field_Staff_Communication extends Model
{
    use HasFactory;

    protected $table = 'field_staff_communications';

    protected $fillable = [
        'sap_code',
        'name',
        'message',
        'date',
    ];
}
